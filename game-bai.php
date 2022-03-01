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
                    </div>
            </section>
        </div>
        <div class="col-lg-8 col-sm-12">
            <div class="clearfix"></div>

        </div>
    </div>
</div>

    

<?php include 'component/footer.php'; ?>
<?php include 'component/script.php'; ?>
</body>
</html>