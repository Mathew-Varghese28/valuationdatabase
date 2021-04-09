@extends("theme")

@section("content")

    <div class="container">
    <h1>Product Details</h1>
    <table class="table">
    <tr>
        <th>product code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Distribution Name</th>
        <th>MAnufacturing date</th>
        <th>Expary Date</th>
    </tr>
    @foreach($products as $product)
        
            <tr>
                <td>{{ $product->pcode }}</td>
                <td>{{ $product->pname }}</td>
                <td>{{ $product->pdes }}</td>
                <td>{{ $product->pprice }}</td>
                <td>{{ $product->pdist }}</td>
                <td>{{ $product->pmanu }}</td>
                <td>{{ $product->pexp }}</td>
            </tr>
            @endforeach
    </table>
    </form>
        
        </div>
    </div>
    
@endsection