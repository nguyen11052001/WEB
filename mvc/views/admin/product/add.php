<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ADD PRODUCT</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form  method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputName">Tên sản phẩm</label>
                    <input type="text" id="inputName" class="form-control" name="tensanpham">
                </div>
                <div class="form-group">
                    <label for="inputName">Ảnh sản phẩm</label>
                    <!-- <input type="file" id="inputName" class="form-control" name="img"> -->
                    <!-- <input type="file" class="custom-file-input" id="exampleInputFile" name="img" style="opacity: 1;"> -->
                    <div class="input-group">
                      <div class="custom-file" >
                       <div>
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img1">
                            <label  class="custom-file-label" for="exampleInputFile">Hãy chọn file ảnh </label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">Ảnh sản phẩm</label>
                    <!-- <input type="file" id="inputName" class="form-control" name="img"> -->
                    <!-- <input type="file" class="custom-file-input" id="exampleInputFile" name="img" style="opacity: 1;"> -->
                    <div class="input-group">
                      <div class="custom-file" >
                       <div>
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img2">
                            <label  class="custom-file-label" for="exampleInputFile">Hãy chọn file ảnh </label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">Giá </label>
                    <input type="text" id="inputName" class="form-control" name="gia">
                </div>
                <div class="form-group">
                    <label for="inputName">Số lượng</label>
                    <input type="text" id="inputName" class="form-control" name="soluong">
                </div>
                <div class="form-group">
                    <label for="inputName">xuất xứ</label>
                    <input type="text" id="inputName" class="form-control" name="xuatxu">
                </div>
                <div class="form-group">
                    <label for="inputName">Loại sản phẩm</label>
                    <input type="text" id="inputName" class="form-control" name="cate_ID" placeholder="1: Nam | 2:  Nữ">
                </div>
                <div class="form-group">
                    <label for="inputName">Miêu tả sản phẩm</label>
                    <input type="text" id="inputName" class="form-control" name="mieutasanpham">
                </div>
                <div class="form-group">
                    <label for="inputName">Thông tin sản phẩm </label>
                    <input type="text" id="inputName" class="form-control" name="thongtinsanpham">
                </div>
                <div class="form-group">
                    <label for="inputName">Cân nặng </label>
                    <input type="text" id="inputName" class="form-control" name="cannang">
                </div>
               
                <input   type="submit" value="THÊM SẢN PHẨM" name="addProduct" class="btn btn-success float-left px-5 py-3">
            </form>
        </div>

        <!-- /.card-body -->
    </div>
</div>