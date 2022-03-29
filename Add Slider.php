@model WatchStore.Models.MSlider

@{
    ViewBag.Title = "Create";
    Layout = "~/Areas/Admin/Views/Shared/_LayoutAdmin.cshtml";
}

@Html.Partial("_MessageAlert")
@using (Html.BeginForm("Create", "Slider", FormMethod.Post, new { enctype = "multipart/form-data" }))
{
    @Html.AntiForgeryToken()
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2>Slider</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="~/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Slider</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Create</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-3">
            <br />
            <button class="btn btn-success " type="submit"><i class="fa fa-upload"></i>&nbsp;&nbsp;<span class="bold">Thêm mới</span></button>
            <a class="btn btn-danger " href="@Url.Action("Index","Slider")"><i class="fa fa-undo"></i>&nbsp;&nbsp;<span class="bold">Trở về</span></a>

        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <p><i class="text-danger"><strong>* </strong>Các mục đánh dấu (*) là bắt buộc</i></p>

                    </div>
                    <div class="ibox-content">
                        <form method="get">
                            <div class="row">
                                <div class="col-md-9">
                                    @Html.ValidationSummary(true, "", new { @class = "text-danger" })
                                    <div class="form-group">
                                        <label>Tên Slider</label>
                                        @Html.EditorFor(model => model.Name, new { htmlAttributes = new { @class = "form-control" } })
                                        @Html.ValidationMessageFor(model => model.Name, "", new { @class = "text-danger" })

                                    </div>
                                    <div class="form-group">
                                        <label>Sắp xếp</label>
                                        @Html.DropDownListFor(model => model.Orders, (SelectList)ViewBag.Orders, new { @class = "form-control" })
                                        @Html.ValidationMessageFor(model => model.Orders, "", new { @class = "text-danger" })

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="Status">
                                            <option value="1">Hiện</option>
                                            <option value="2">Ẩn</option>
                                        </select>
                                        @Html.ValidationMessageFor(model => model.Status, "", new { @class = "text-danger" })
                                    </div>
                                    <div class="form-group">
                                        <label>Hình</label>
                                        <input type="file" name="Img" class="form-control" />
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

}