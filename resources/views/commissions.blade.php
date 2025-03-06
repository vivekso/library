@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h2>Order Commissions</h2>
    
    <div class="d-flex justify-content-between mb-3">
        <p>List of all order commissions.</p>
        <button class="btn btn-success" onclick="exportTableToCSV('commissions.csv')">Export</button>
    </div>

    <table class="table table-bordered" id="commissionTable">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Order Amount (₹)</th>
                <th>Commission Amount (₹)</th>
                <th>Customer Name</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($commissions as $commission) --}}
                <tr>
                    <td>#ORD12345</td>
                    <td>Online Course</td>
                    <td>₹1500</td>
                    <td>₹150</td>
                    <td>John Doe</td>
                </tr>
                <tr>
                    <td>#ORD12346</td>
                    <td>E-Book</td>
                    <td>₹499</td>
                    <td>₹50</td>
                    <td>Jane Smith</td>
                </tr>
                <tr>
                    <td>#ORD12347</td>
                    <td>Mock Test</td>
                    <td>₹799</td>
                    <td>₹80</td>
                    <td>Alex Johnson</td>
                </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>

<script>
    function exportTableToCSV(filename) {
        let csv = [];
        let rows = document.querySelectorAll("table tr");
        
        for (let row of rows) {
            let cols = row.querySelectorAll("td, th");
            let rowData = [];
            
            for (let col of cols) {
                rowData.push(col.innerText);
            }
            
            csv.push(rowData.join(","));
        }

        let csvFile = new Blob([csv.join("\n")], { type: "text/csv" });
        let downloadLink = document.createElement("a");
        downloadLink.href = URL.createObjectURL(csvFile);
        downloadLink.download = filename;
        downloadLink.click();
    }
</script>

@endsection
