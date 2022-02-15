<html>

<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Camera DDNS || HOME</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<header>
    <div class="wrap_login_header">
        <a href="./index.php"><img align="center" src="./images/cameraddns.png"></a>
        <img align="right" src="./images/logo.png">

        <p><span><FONT size="4"><i>Dịch vụ DDNS của GREENVISION Việt Nam</i></FONT></span></p>
        </BR>
        <span class="language">

            <div class="welcome">
					admin &nbsp; || &nbsp; <a href='login.php'>Đăng xuất</a>
				</div>
			</span>

    </div>
</header>

<section>
    <div class="wrap"> 
        <div class="login">

            <div class="navi">
                <span rel="list_parkdyn" class="active">Danh sách</span>
                <span rel="parkdyn" class="">Cấu hình</span>
                <span rel="profile" class="">Tài khoản</span>


            </div>


            <form rel="parkdyn" class="redirect frm_parkdyn " action="" method="POST">
                <ul>
                    <li>
                        <label>Host name: (Hostname chỉ chứa các ký tự: 'a-z', hoặc '0-9', hoặc dấu '-', tối đa 25 ký
                            tự) <input type="text" name="hostname" class="w_100"
                                       placeholder="Xin vui lòng nhập hostname"></label>

                    </li>
                    <li>
                        <label>


                            Current IP Address

                        </label>
                        <input type="text" class="w_100" name="txt_ipaddress" value=""
                               placeholder="Xin vui lòng nhập IP" required="required">
                    </li>
                    <li>
                        <label>Port</label>
                        <input type="text" class="w_100" name="txt_port" value="" placeholder="vui_long_nhap_port"
                               required="required">
                    </li>
                    <li>
                        <label>Note</label>
                        <input type="text" class="w_100" name="txt_note" value="">
                    </li>
                    <li>
                        <input type="submit" class="w_30_btn" name="btn_parkdyn" value="THÊM MỚI">

                    </li>
                </ul>
            </form>
            <script type="text/javascript">

                function enter_page(link_filteruser, page_type) {
                    var page = document.getElementById(page_type).value;
                    page = page.trim();
                    if (page == "") {
                        return;
                    }
                    window.location = "index.php?" + link_filteruser + "page=" + page;
                }

            </script>

            <script type="text/javascript">
                function click_search() {
                    var hostname = document.getElementById("search_host").value;
                    hostname = hostname.trim();
                    if (hostname == "") {
                        return;
                    }
                    var url = "./index.php?search=" + hostname;
                    document.getElementById("link_search").href = url;

                }

                function enter_search() {
                    var hostname = document.getElementById("search_host").value;
                    hostname = hostname.trim();
                    if (hostname == "") {
                        return;
                    }
                    var url = "./index.php?search=" + hostname;
                    document.getElementById("link_search").href = url;
                    window.location.href = url;
                }

            </script>


            <table class="list_parkdyn redirect active" border="1" rel="list_parkdyn">

                <thead>
                <tr>
                    <td colspan="3">
                        <a href="" class="add_btn" style="text-decoration: none;">Thêm mới
                        </a></td>
                    <td colspan="9">
                        <div align="right">
                            <STRONG><FONT size="3">Search: <input type="search" id="search_host" size="30"
                                                                           onsearch="enter_search()" placeholder="Hostname" value="">
                                    &nbsp;&nbsp; <a href="#" id="link_search" onclick="click_search()"><img
                                                align="center" src="./images/search.png"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=""> Clear search </a>
                                </FONT></STRONG>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td align=Center colspan="12">


                    </td>
                </tr>

                <tr style="background-color:#e6e6e6; font-size:15px;">
                    <th>#</th>


                    <th>Hostname</th>
                    <th>Note</th>
                    <th>Domain</th>
                    <th>Web Access</th>
                    <th>Last Status</th>
                    <th>Last Update Time</th>
                    <th>IP Address</th>
                    <th>Last IP Address</th>
                    <th>Port</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <tr style="font-size:14px;">
                    <td>1</td>


                    <td><a href="" title="Cập nhật Hostname">ex1</a></td>
                    <td align=center>
                        <div class="tooltip"><img src="images/note.png"><span class="tooltiptext"></span></div>
                    </td>
                    <td>ex1.greenddns.net</td>
                    <td align=center><a href='' target='_blank'>Click here</a>
                    </td>
                    <td align=Left>
                        <FONT color="#D71820">IP Not Change</FONT>
                    </td>
                    <td align=center>2021-11-21 08:19:42</td>
                    <td align=center>42.113.176.100</td>
                    <td align=center>42.119.233.205</td>
                    <td align=center>80</td>
                    <td align=center><a id="" class="remove_hostname"
                                        href="" title="Xóa">Xóa</a></td>
                </tr>
                <tr style="font-size:14px;">
                    <td>2</td>


                    <td><a href="" title="Cập nhật Hostname">ex1</a></td>
                    <td align=center>
                        <div class="tooltip"><img src="images/note.png"><span class="tooltiptext"></span></div>
                    </td>
                    <td>ex1.greenddns.net</td>
                    <td align=center><a href='' target='_blank'>Click here</a>
                    </td>
                    <td align=Left>
                        <FONT color="#D71820">IP Not Change</FONT>
                    </td>
                    <td align=center>2021-11-21 08:19:42</td>
                    <td align=center>42.113.176.100</td>
                    <td align=center>42.119.233.205</td>
                    <td align=center>80</td>
                    <td align=center><a id="" class="remove_hostname"
                                        href="" title="Xóa">Xóa</a></td>
                </tr>
                <tr style="font-size:14px;">
                    <td>3</td>


                    <td><a href="" title="Cập nhật Hostname">ex1</a></td>
                    <td align=center>
                        <div class="tooltip"><img src="images/note.png"><span class="tooltiptext"></span></div>
                    </td>
                    <td>ex1.greenddns.net</td>
                    <td align=center><a href='' target='_blank'>Click here</a>
                    </td>
                    <td align=Left>
                        <FONT color="#D71820">IP Not Change</FONT>
                    </td>
                    <td align=center>2021-11-21 08:19:42</td>
                    <td align=center>42.113.176.100</td>
                    <td align=center>42.119.233.205</td>
                    <td align=center>80</td>
                    <td align=center><a id="" class="remove_hostname"
                                        href="" title="Xóa">Xóa</a></td>
                </tr>
                <tr style="font-size:14px;">
                    <td>4</td>


                    <td><a href="" title="Cập nhật Hostname">ex1</a></td>
                    <td align=center>
                        <div class="tooltip"><img src="images/note.png"><span class="tooltiptext"></span></div>
                    </td>
                    <td>ex1.greenddns.net</td>
                    <td align=center><a href='' target='_blank'>Click here</a>
                    </td>
                    <td align=Left>
                        <FONT color="#D71820">IP Update Successful</FONT>
                    </td>
                    <td align=center>2021-11-21 08:19:42</td>
                    <td align=center>42.113.176.100</td>
                    <td align=center>42.119.233.205</td>
                    <td align=center>80</td>
                    <td align=center><a id="" class="remove_hostname"
                                        href="" title="Xóa">Xóa</a></td>
                </tr>
                <tr style="font-size:14px;">
                    <td>5</td>


                    <td><a href="" title="Cập nhật Hostname">ex1</a></td>
                    <td align=center>
                        <div class="tooltip"><img src="images/note.png"><span class="tooltiptext"></span></div>
                    </td>
                    <td>ex1.greenddns.net</td>
                    <td align=center><a href='' target='_blank'>Click here</a>
                    </td>
                    <td align=Left>
                        <FONT color="#D71820">IP Update Successful</FONT>
                    </td>
                    <td align=center>2021-11-21 08:19:42</td>
                    <td align=center>42.113.176.100</td>
                    <td align=center>42.119.233.205</td>
                    <td align=center>80</td>
                    <td align=center><a id="" class="remove_hostname"
                                        href="" title="Xóa">Xóa</a></td>
                </tr>
                </tbody>
                <tfoot>

                <td align=Center colspan="12">


                    </BR>
                </td>


                <tr style="font-size:14px;">
                    <td colspan="12">
                        <FONT color="#D71820">IP Not Change: </FONT>Xác nhận thiết bị kết nối thành công, tuy nhiên IP
                        không thay đổi</BR>
                        <FONT color="#D71820">IP Update Successful: </FONT>Xác nhận thiết bị kết nối thành công, IP mới
                        đã được cập nhật
                    </td>

                </tr>
                </tfoot>
            </table>

            <form rel="profile" class="redirect frm_profile " action="" method="POST">
                <ul>
                    <li>
                        <label>Username: admin</label>
                    </li>
                    <li>
                        <label>Mật khẩu</label>
                        <input type="password" class="w_100" name="txt_password" value=""
                               placeholder="Xin vui lòng nhập mật khẩu">
                    </li>
                    <li>
                        <label>Xác nhận mật khẩu</label>
                        <input type="password" class="w_100" name="txt_cf_password" value=""
                               placeholder="Xin vui lòng nhập mật khẩu">
                    </li>
                    <li>
                        <label>Email</label>
                        <input type="email" class="w_100" name="txt_email" value=""
                               placeholder="Xin vui lòng nhập Email" required="required">
                    </li>
                    <li>
                        <label>Họ tên</label>
                        <input type="text" class="w_100" name="txt_fullname" value=""
                               placeholder="Xin vui lòng nhập họ tên" required="">
                    </li>
                    <li>
                        <label>Điện thoại</label>
                        <input type="text" class="w_100" name="txt_tel" value=""
                               placeholder="Xin vui lòng nhập điện thoại" required="">
                    </li>
                    <li>
                        <input class="w_30_btn" type="submit" name="btn_profile" value="CẬP NHẬT">
                    </li>
                </ul>
            </form>
        </div>
        </BR></BR>
    </div>
</section>


<div class="footerBox">
    <FONT size="2"> Copyright © 2021 GREENVISION. </FONT>
</div>


</body>

</html>  
 