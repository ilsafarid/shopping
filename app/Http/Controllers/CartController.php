<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        $price = floatval(str_replace(['$', ','], '', $product->Product_price));

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->Product_Name,
                "price" => $product->Product_price,
                "quantity" => 1,
                "image" => $product->image ?? null,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Cart updated successfully');
        }
    }

    public function viewCart()
    {
        return view('cart');
    }


    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart');
        unset($cart[$request->id]);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product removed');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $cart = session()->get('cart');
        if (!$cart || count($cart) == 0) {
            return redirect()->back()->with('error', 'Cart is empty!');
        }

        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        foreach ($cart as $item) {
            $price = floatval(str_replace(['$', ','], '', $item['price']));

            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $price, // Store the cleaned price
            ]);
        }

        session()->forget('cart');

        return redirect('/')->with('success', 'Order placed successfully!');
    }
}