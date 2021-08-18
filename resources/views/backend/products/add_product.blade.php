@extends('backend.master')

@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="form-layout form-layout-1">
        <div class="row mg-b-25">
            <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="firstname" value="" placeholder="Enter Title">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option label="Choose Brand"></option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Manufecturer: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="manufecturer" value="" placeholder="Enter Manufecturer">
                </div>
              </div><!-- col-4 -->
            <table class="table-editable">
                <tbody>
                    <tr class="d-flex">
                        <td class="col-lg-5">
                            <div class="form-group">
                            <label class="form-control-label">SKU: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="sku" value="" placeholder="Enter SKU">
                            </div>
                        </td><!-- col-4 -->
                        <td class="col-lg-5">
                            <div class="form-group">
                            <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="price" value="" placeholder="Enter Price">
                            </div>
                        </td><!-- col-4 -->
                        <td class="col-lg-6">
                            <div class="form-group">
                            <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="quantity" value="" placeholder="Enter Quantity">
                            </div>
                        </td><!-- col-4 -->

                        <td rowspan="2" class="table-controls table-zapper">
                            <button class="btnDeleteRow btn-zap" type="button" disabled>&times;</a>
                        </td>
                    </tr>
                    <tr class="d-flex">
                            <td class="col-lg-8">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Color: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" data-placeholder="Choose Color">
                                        <option label="Choose Color"></option>
                                        <option value="USA">United States of America</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="China">China</option>
                                        <option value="Japan">Japan</option>
                                    </select>
                                </div>
                            </td><!-- col-4 -->
                            <td class="col-lg-8">
                                <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Size: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" data-placeholder="Choose Size">
                                    <option label="Choose Size"></option>
                                    <option value="USA">United States of America</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="China">China</option>
                                    <option value="Japan">Japan</option>
                                </select>
                                </div>
                            </td><!-- col-4 -->
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                          <button type="button" class="btnAddRow btn btn-primary btn-sm">Add Multiple Color Sizes</button>
                        </td>
                    </tr>
                    </tfoot>
            </table>
          <div class="col-lg-12 mg-t-20">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Descritpion: <span class="tx-danger">*</span></label>
              <textarea class="form-control" name="description" id="description" rows="10"></textarea>
            </div>
          </div><!-- col-12 -->
          <div class="col-lg-12 mg-t-20">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Thumbnail Image: <span class="tx-danger">*</span></label>
              <input type="file" class="form-control" name="thumbnail" id="thumbnail">
            </div>
          </div><!-- col-12 -->
          <div class="col-lg-12 mg-t-20">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Images: <span class="tx-danger">*</span></label>
              <input type="file" class="form-control" name="images" id="images" multiple="multiple">
            </div>
          </div><!-- col-12 -->
        </div><!-- row -->
        <div class="form-layout-footer text-center">
          <a href="" class="btn btn-info">Add Product</a>
        </div><!-- form-layout-footer -->
      </div><!-- form-layout -->

    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endsection

@section('variation')

<style>
    .btn-zap:disabled {
  background:; color:rgb(226, 11, 11);
  opacity:.5;
  cursor:default;
}

td.table-controls.table-zapper {
    margin-top: 30px;
}

button.btnDeleteRow.btn-zap {
    color: red;
    font-weight: bold;
}
</style>
  <script>
      //delete row
$(".btnDeleteRow").click(function() {
  var rowCount = $(this).closest('table').find('tbody').length;
  if (rowCount > 1) {
    $(this).closest('tbody').remove();
  }
  rowCount --;
  if (rowCount <= 1) {
    $(document).find('.btnDeleteRow').prop('disabled', true);
  }
});

//add row
$(".btnAddRow").click(function() {
  var table = $(this).closest('table');
  var lastRow = table.find('tbody').last();
  var newRow = lastRow.clone(true, true);
  newRow.find('input, select').val('');

  newRow.insertAfter(lastRow);
  table.find('.btnDeleteRow').removeAttr("disabled");
});



// growTextarea function: use for testing that the the javascript
// is also copied when row is cloned.  to confirm,
// type several lines into Location, add a row, & repeat

function growTextarea (i,elem) {
    var elem = $(elem);
    var resizeTextarea = function( elem ) {
        var scrollLeft = window.pageXOffset || (document.documentElement || document.body.parentNode || document.body).scrollLeft;
        var scrollTop  = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
        elem.css('height', 'auto').css('height', elem.prop('scrollHeight') );
        window.scrollTo(scrollLeft, scrollTop);
    };

    elem.on('input', function() {
        resizeTextarea( $(this) );
    });

    resizeTextarea( $(elem) );
}

$('.growTextarea').each(growTextarea);
  </script>
@endsection
