<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;


class invoiceItem extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'items' => 'required|array|min:1',
            'items.*.description' => 'required|string',
            'items.*.quantity' => 'required|integer|min:1',
            'items.*.unit_price' => 'required|numeric|min:0',
            'items.*.total' => 'required|numeric|min:0',
        ]);

        foreach ($request->items as $itemData) {
            Items::create([
                'invoice_id' => $request->invoice_id,
                'description' => $itemData['description'],
                'quantity' => $itemData['quantity'],
                'unit_price' => $itemData['unit_price'],
                'total' => $itemData['total'],
            ]);
        }

        return response()->json(['message' => 'Invoice items saved successfully.'], 201);
    }

    /**
     * ✅ Retrieve items by invoice ID
     */
    public function getItemsByInvoice($invoice_id)
    {
        $items = Items::where('invoice_id', $invoice_id)->get();

        return response()->json([
            'invoice_id' => $invoice_id,
            'items' => $items
        ]);
    }
}
