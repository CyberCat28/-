<?php require_once './function/get_ware.php'; ?>
<?php require_once "./function/connect.php"; ?>
<?php require_once "./elements/header.php"; ?>

<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-10 mx-auto card p-3">
                           <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="" class="form-label">Введите название</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Введите описание</label>
                                    <textarea type="text" name="description" class="form-control">
                                    </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Укажите изображение</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Отправить</button>
                           </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once './elements/footer.php'; ?>