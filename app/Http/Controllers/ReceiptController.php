<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    /**
     * ✅ Store a new receipt
     */
    public function store(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'amount_paid' => 'required|numeric|min:0',
            'payment_date' => 'required|date',
            'payment_method' => 'nullable|string',
            'notes' => 'nullable|string',
            'pdf_path' => 'nullable|string',
        ]);

        $receipt = Receipt::create([
            'invoice_id' => $request->invoice_id,
            'amount_paid' => $request->amount_paid,
            'payment_date' => $request->payment_date,
            'payment_method' => $request->payment_method,
            'notes' => $request->notes,
            'pdf_path' => $request->pdf_path,
        ]);

        return response()->json([
            'message' => 'Receipt created successfully.',
            'receipt' => $receipt
        ], 201);
    }

    /**
     * 📥 Retrieve receipts by invoice ID
     */
    public function getByInvoice($invoice_id)
    {
        $receipts = Receipt::where('invoice_id', $invoice_id)->get();

        return response()->json([
            'invoice_id' => $invoice_id,
            'receipts' => $receipts
        ]);
    }

    /**
     * 💾 Update receipt with PDF path
     */
    public function updatePdfPath(Request $request, $id)
    {
        $request->validate([
            'pdf_path' => 'required|string'
        ]);

        $receipt = Receipt::findOrFail($id);
        $receipt->pdf_path = $request->pdf_path;
        $receipt->save();

        return response()->json([
            'message' => 'PDF path saved successfully.',
            'receipt' => $receipt
        ]);
    }
}

