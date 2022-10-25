<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
    <section class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <div class="notfound-404">
                            <h1>Oops!</h1>
                        </div>
                        <h3>404 - Không tìm thấy trang</h3>
                        <p>Trang bạn đang tìm kiếm có thể đã bị xóa, đổi tên hoặc tạm thời không có sẵn.</p>
                        <a href="/" class="btn btn-primary">Trở về trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
