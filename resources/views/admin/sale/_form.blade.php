<div class="form-group">
    <label for="client_id">Cliente</label>
    <select class="form-control selectpicker"  name="client_id" id="client_id">
        @foreach ($clients as $client )
        <option value="{{$client->id}}">{{$client->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="tax">Impuesto</label>
    <input type="number" class="form-control" name="tax" id="tax" aria-describedby="helpId" placeholder="19%">
</div>
<div class="form-group">
  <label for="code">Código de Barras</label>
  <input type="text" name="code" id="code" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="product_id">Producto</label>
    <select  class="form-control selectpicker" data-live-search="true" name="product_id" id="product_id">
        <option value="0" disabled selected>Seleccione un producto</option>
        @foreach ($products as $product )
        <option value="{{$product->id}}_{{$product->stock}}_{{$product->sell_price}}">{{$product->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="stock">Stock actual</label>
    <input type="text" name="stock" id="stock" class="form-control" disabled>
</div>

<div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="number" class="form-control" name="quantity" id="quantity" aria-describedby="helpId" placeholder="0.00">
</div>

<div class="form-group">
    <label for="price">Precio de venta</label>
    <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId"  disabled>
</div>
<div class="form-group">
    <label for="discount">Porcentaje de descuento</label>
    <input type="number" class="form-control" name="discount" id="discount" aria-describedby="helpId" placeholder="0.00" value="0">
</div>
<div class="form-group">
    <button type="button" class="btn btn-primary float-right" id="agregar"> + Agregar venta</button>
</div>

<div class="form-group">
<h4 class="card-title">Detalle de Venta</h4>
<div class="table-responsive col-md-12">
    <table id="detalles" class="table table-striped">
        <thead>
            <tr>
                <th>Eliminar</th>
                <th>Producto</th>
                <th>Precio de Venta (PES)</th>
                <th>Cantidad</th>
                <th>Descuento</th>
                <th>Subtotal (PES)</th>
            </tr>
        </thead>
        <tfoot>
        </br></br>
            <tr>
                <th colspan="6">
                    <p align="right">TOTAL:</p>
                </th>
                <th>
                    <p align="right"><span id="total">PRECIO 0.00</span></p>
                </th>
            </tr>
            <tr>
                <th colspan="6">
                    <p align="right">TOTAL IMPUESTO (19%):</p>
                </th>
                <th>
                    <p align="right"><span id="total_impuesto">VALOR 0.00</span></p>
                </th>
            </tr>
            <tr>
                <th colspan="6">
                    <p align="right" id="#">TOTAL PAGAR:</p>
                </th>
                <th>
                <p align="right"><span align="right" id="total_pagar_html">PRECIO 0.00</span>
                <input type="hidden" name="total" id="total_pagar"></p>
            </th>
            </tr>
        </tfoot>
        <tbody>

        </tbody>
    </table>
</div>
