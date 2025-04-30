<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * 📄 List all invoices.
     */
    public function index()
    {
        $invoices = Invoice::all();

        return response()->json([
            'count' => $invoices->count(),
            'invoices' => $invoices
        ]);
    }

    /**
     * 📥 Store a new invoice.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'business_id' => 'required|exists:businesses,id',
            'client_id' => 'required|exists:clients,id',
            'invoice_number' => 'required|unique:invoices,invoice_number',
            'date' => 'required|date',
            'due_date' => 'nullable|date',
            'subtotal' => 'required|numeric',
            'tax' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'total' => 'required|numeric',
            'currency' => 'required|string|max:3',
            'notes' => 'nullable|string',
            'pdf_path' => 'nullable|string',
            'status' => 'nullable|in:draft,sent,paid,overdue',
        ]);

        $validated['status'] = $validated['status'] ?? 'draft';

        $invoice = Invoice::create($validated);

        return response()->json([
            'message' => 'Invoice created successfully.',
            'data' => $invoice
        ], 201);
    }

    /**
     * ✅ Get all approved (paid) invoices.
     */
    public function approvedInvoices()
    {
        $approved = Invoice::where('status', 'paid')->get();

        return response()->json([
            'count' => $approved->count(),
            'invoices' => $approved
        ]);
    }

    /**
     * 🔍 Show a single invoice.
     */
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);

        return response()->json($invoice);
    }

    /**
     * ✏️ Update an existing invoice.
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);

        $validated = $request->validate([
            'business_id' => 'sometimes|exists:businesses,id',
            'client_id' => 'sometimes|exists:clients,id',
            'invoice_number' => 'sometimes|unique:invoices,invoice_number,' . $invoice->id,
            'date' => 'sometimes|date',
            'due_date' => 'nullable|date',
            'subtotal' => 'sometimes|numeric',
            'tax' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'total' => 'sometimes|numeric',
            'currency' => 'sometimes|string|max:3',
            'notes' => 'nullable|string',
            'pdf_path' => 'nullable|string',
            'status' => 'nullable|in:draft,sent,paid,overdue',
        ]);

        $invoice->update($validated);

        return response()->json([
            'message' => 'Invoice updated successfully.',
            'data' => $invoice
        ]);
    }

    /**
     * ❌ Delete an invoice.
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return response()->json([
            'message' => 'Invoice deleted successfully.'
        ]);
    }
}
