<?php 
require 'config.php';

        $data = [];
        $data[0] = new stdClass;
        $data[0]->stt = 1;
        $data[0]->img = 'https://doithuongthecao.com/wp-content/uploads/2021/07/go88-2.jpg';
        $data[0]->title = 'Go88';
        $data[0]->des = 'Cổng game đổi thưởng uy tín, chất lượng';
        $data[0]->star = 3;

        $data[1] = new stdClass;
        $data[1]->stt = 2;
        $data[1]->img = 'https://doithuongthecao.com/wp-content/uploads/2021/07/sun-wwin.jpg';
        $data[1]->title = 'Sun win';
        $data[1]->des = 'Game bài đổi thưởng hot nhất hiện nay';
        $data[1]->star = 5;

        $data[2] = new stdClass;
        $data[2]->stt = 3;
        $data[2]->img = 'https://doithuongthecao.com/wp-content/uploads/2021/07/fa88-club-logo-1.png';
        $data[2]->title = 'FA88';
        $data[2]->des = 'Thiên Đường Cờ Bạc Quốc Tế';
        $data[2]->star = 4;

        $data[3] = new stdClass;
        $data[3]->stt = 4;
        $data[3]->img = 'https://doithuongthecao.com/wp-content/uploads/2021/07/vin-win-logo-1.png';
        $data[3]->title = 'VINWIN';
        $data[3]->des = 'Thiên đường game bài đổi thưởng cứ chơi là trúng';
        $data[3]->star = 2;
        
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'component/head.php'; ?>
<body>
<?php include 'component/header.php'; ?>

<div class="main-content container">
    <div class="main-breadcrumb">
        <div class="entry-crumbs">
            <span><a title="" class="entry-crumb" href="https://doithuongthecao.com/">Trang Chủ</a></span> <i> > </i> <span class="td-bred-no-url-last">Game bài miễn phí</span>
        </div>
    </div>
    <h2 class="entry-title page-title">Top 5 game bài miễn phí online hay nhất năm 2021 </h2>
</div>

<div class="main-content container pt-0">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <section>
                <div class="gcse-searchbox-only"></div>
                    <div class="row pl-3">

                        <?php foreach($data as $item): ?>
                        <div class="col-12 item">
                            <span class="game-position"><?php echo $item->stt; ?></span>
                            <div class="game-logo">
                            <a href="https://doithuongthecao.com/<?php echo $item->title; ?>/" title="<?php echo $item->title.' - '.$item->des ?>">
                                <img class="img-fluid" src="<?php echo $item->img; ?>" alt="<?php echo $item->title.' - '.$item->des ?>">
                            </a>
                            </div>
                            <div class="game-meta">
                                <h3><?php echo $item->title; ?></h3>
                                <p class="d-none d-lg-block"><?php echo $item->des; ?></p>
                            </div>
                            <div class="game-star d-none d-lg-block">
                                <div class="rating-star width-100">
                                    <div class="box-star width-50">
                                        <div class='rating' data-star="<?php echo $item->star; ?>"></div>
                                    </div>
                                    <div class="legend">
                                    <?php echo $item->star; ?>/5 - (<?php echo $item->star; ?> bình chọn)
                                    </div>
                                </div>
                                <div class="gift-code">
                                    <a href="https://doithuongthecao.com/go88/" rel="nofollow">Nhận gift Code <img src="https://doithuongthecao.com/wp-content/themes/Newspaper/images/hot.gif?v=1" alt="hot"></a>
                                </div>
                            </div>
                            <div class="game-button">
                                <a href="" class="btn_bet" rel="nofollow" target="_blank">
                                    <i class="fas fa-hand-point-right" style="margin-right: 0"></i>
                                    <span class="tdm-btn-text">Cược ngay</span>
                                </a>
                                <a href="https://doithuongthecao.com/<?php echo $item->title; ?>/" class="btn_review" rel="nofollow">
                                    <i class="fas fa-eye" style="margin-right: 0"></i>
                                    <span class="tdm-btn-text">Xem review</span>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <?php for($i=0;$i<5;$i++): ?>
                        <div class="col-12 list-post-hori">
                            <div class="img-thumb">
                                <a href="https://doithuongthecao.com/ongame/" rel="bookmark" class="td-image-wrap" title="Ongame: Thiên đường giải trí game bài online">
                                    <img width="218" height="150" class="entry-thumb" src="https://doithuongthecao.com/wp-content/uploads/2021/08/ONGAME-VN-218x150.png" alt="" title="Ongame: Thiên đường giải trí game bài online">
                                </a>
                            </div> 
                            <div class="post-detail">
                                <h3>
                                    <a href="https://doithuongthecao.com/ongame/" rel="bookmark" title="Ongame: Thiên đường giải trí game bài online">Ongame: Thiên đường giải trí game bài online</a>
                                </h3>
                                <div class="meta"></div>
                                <div class="des">Ongame được cộng đồng người tham gia biết đến là một thiên đường giải trí hoàn toàn miễn phí. Sự nổi bật của nó... </div>
                            </div>   
                        </div>
                        <?php endfor; ?>

                        <div class="category-desc">
                            <a href="https://doithuongthecao.com/game-bai-mien-phi/"><strong>Game bài miẽn phí </strong></a>
                            vẫn là trò chơi được nhiều người lựa chọn sau những giờ làm việc căng thẳng. Tuy nhiên có rất nhiều hình thức chơi bài và nhiều nhà cái cung cấp dịch vụ này. Chúng tôi doithuongthecao.com hân hạnh giới thiệu với người chơi Top 5 game đánh bài online miễn phí hay nhất 2021
                        </div>
                    </div>
            </section>
        </div>

        <div class="col-lg-4 col-sm-12 widget">
            <div class="clearfix"></div>
            <h2>Top game đổi thưởng</h2>
            <div class="widget-game">

            <?php for($i=0;$i<5;$i++): ?>
                <div class="item">
                    <div class="position">1</div>
                    <div class="logo">
                        <a href="https://doithuongthecao.com/go88/" title="Go88 – Cổng game đổi thưởng uy tín, chất lượng">
                            <img class="img-fluid" src="https://doithuongthecao.com/wp-content/uploads/2021/07/go88-2.jpg" alt="Go88 – Cổng game đổi thưởng uy tín, chất lượng">
                        </a>
                    </div>
                    <div class="title">
                        <h3>Go88</h3>
                    </div>
                    <div class="desc">
                        <h3>Cổng game đổi thưởng uy tín, chất lượng</h3>
                    </div>
                    <div class="star-rate">
                        <div class="rating-star">
                                <div class="box-star">
                                    <div class='rating' data-star="<?php echo $item->star; ?>"></div>
                                </div>
                                <div class="legend">
                                    3/5 - (3 bình chọn)
                                </div>
                        </div>
                        <div class="gift-code">
                            <a href="https://doithuongthecao.com/go88/" rel="nofollow">Nhận gift Code <img src="https://doithuongthecao.com/wp-content/themes/Newspaper/images/hot.gif?v=1" alt="hot"></a>
                        </div>
                    </div>
                    <div class="button-footer">
                        <a href="" class="button-bet" rel="nofollow" target="_blank">
                            <i class="fas fa-hand-point-right" style="margin-right: 0"></i>
                            <span class="btn-text">Cược ngay</span>
                        </a>
                        <a href="https://doithuongthecao.com/go88/" class="button-review" rel="nofollow">
                            <i class="fas fa-eye" style="margin-right: 0"></i>
                            <span class="btn-text">Xem review</span>
                        </a>
                    </div>
                    
                </div>
            
            <?php endfor; ?>
            </div>

            <div class="new-post-widget">
                <h4 class="block-title block-title-black">
                    <span class="pulldown">Bài mới</span>
                </h4>

                <div class="post-item-list">

                    <?php for($i=0;$i<5;$i++): ?>

                    <div class="post-item">
                        <div class="thumbnail-image">
                            <div class="td-image-thumb">
                                <a href="https://doithuongthecao.com/ku777/" rel="bookmark" class="td-image-wrap" title="Ku777 cổng game bài đổi thưởng trực tuyến tới từ châu âu">
                                    <img width="218" height="150" class="entry-thumb" src="https://doithuongthecao.com/wp-content/uploads/2021/12/150255320_147523483869522_2116487897989746556_n-324x235.jpg" alt="Đổi thưởng thẻ cào - Game bài đổi thưởng số 1 Việt Nam" title="">
                                </a>
                            </div> 
                            <a href="https://doithuongthecao.com/game-bai-doi-thuong/" class="post-tag">Nhà cái uy tín</a> 
                        </div>
                        <h3 class="entry-title"><a href="https://doithuongthecao.com/ku777/" rel="bookmark" title="Ku777 cổng game bài đổi thưởng trực tuyến tới từ châu âu">Code Gọi Rồng Online – Cách nhận, nhập mã code mới...</a></h3>
                        <div class="mt-1" style="min-height: 1px;"></div>
                        <div class="description">Gọi Rồng Online là trò chơi thuộc thể loại game MMORPG chuẩn Dragon Ball được phát hành bởi chính người Việt mình. Để tăng... </div>
                    </div>

                    <?php endfor; ?>

                </div>

            </div>

            <div class="game-widget">
                <h4 class="block-title block-title-black">
                    <span class="pulldown">Thủ thuật Games</span>
                </h4>

                <div class="game-item-list">

                    <?php for($i=0;$i<5;$i++): ?>

                    <div class="game-item">
                        <div class="thumbnail-image">
                            <div class="td-image-thumb">
                                <a href="https://doithuongthecao.com/ku777/" rel="bookmark" class="td-image-wrap" title="Ku777 cổng game bài đổi thưởng trực tuyến tới từ châu âu">
                                    <img width="218" height="150" class="entry-thumb" src="https://doithuongthecao.com/wp-content/uploads/2021/11/2game-than-thu-3d-mobile-tang-qua-3-324x160.jpg" alt="Đổi thưởng thẻ cào - Game bài đổi thưởng số 1 Việt Nam" title="">
                                </a>
                            </div> 
                            <a href="https://doithuongthecao.com/game-bai-doi-thuong/" class="post-tag">Thủ thuật game</a> 
                        </div>
                        <h3 class="entry-title"><a href="https://doithuongthecao.com/ku777/" rel="bookmark" title="Ku777 cổng game bài đổi thưởng trực tuyến tới từ châu âu">Code Thần Thú 3D – Mã code đại chiến mới nhất...</a></h3>
                        </div>

                    <?php endfor; ?>

                </div>

            </div>

        </div>
        
    </div>
</div>

    

<?php include 'component/footer.php'; ?>
<?php include 'component/script.php'; ?>
</body>
</html>