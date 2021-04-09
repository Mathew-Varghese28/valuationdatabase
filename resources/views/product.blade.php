@extends("theme")

@section("content")

    <div class="container">
    <h1>Product Details</h1>
    <form action="/viewallproduct" method="post">
    {{csrf_field() }}
    <table class="table">
    <tr>
            <td>product code</td>
            <td><input name="pcode" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="pname" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input name="pdes" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input name="pprice" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Distribution Name</td>
            <td><input name="pdist" type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>MAnufacturing date</td>
            <td><input name="pmanu" type="date" class="form-control"></td>
        </tr>
        <tr>
            <td>Expary Date</td>
            <td><input name="pexp" type="date" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-primary">Submit</button></td>
        </tr>

    </table>
    </form>
        
        </div>
    </div>
    
@endsection