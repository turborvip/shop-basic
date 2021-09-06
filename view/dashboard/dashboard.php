
<?php include dirname(__FILE__).'../../common/header.php'; ?>
<body>
        <div class="row">
            <?php include __DIR__.'../../common/left-menu.php' ?>
            <div class="col-sm-9">
                <?php include __DIR__.'../../common/top-header.php'; ?>
                <div class="main-dashboard">
                    <h5 class="h5-title">
                        Chào Mừng Admin :
                        <?php
                        if (isset($_SESSION["user"])) { echo $_SESSION["user"]["fullname"]; } 
                        //  unset($_SESSION["fullnamead"]);
                        ?>
                        :>
                    </h5>
                </div>
            </div>
        </div>
</body>
</html>
<script>
        $(".collapse1").show();
        console.log("aaaaaa");
<script>
