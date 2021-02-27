<section class="page-form">
    <div class="container">
        <ul class="page-breadcrumb">
            <li class="page-breadcrumb__item"><a class="page-breadcrumb__item-link" href="/">شبکه ابریارهای آروان</a>
            </li>
            <li class="page-breadcrumb__item">ثبت نام</li>
        </ul>
    </div>
    <form class="page-form__box" id="register_form" enctype="multipart/form-data">
        <h2 class="page-form__box-title">فرم ثبت نام شبکه ابریارهای آروان</h2>
        <p class="page-form__box-subtitle">در صورتیکه مایل باشید می توانید برای ما رزومه بفرستید. لطفا فرم زیر را پر
            کنید.</p>
        <fieldset class="page-form__fieldset">
            <legend class="page-form__legend">
                اطلاعات فردی
            </legend>
            <div class="row">

                <div class="page-form__form-group">
                    <label class="page-form__form-label page-form__form-label--required" for="fullname">نام</label>
                    <input class="page-form__form-control" name="fullname" id="fullname" type="text"
                        placeholder="نام و نام خانوادگی" required>
                </div>

                <div class="page-form__form-group">
                    <label class="page-form__form-label page-form__form-label--required" for="tel">تلفن</label>
                    <input class="page-form__form-control" name="tel" id="tel" type="tel" placeholder="0952654484"
                        required>
                </div>

                <div class="page-form__form-group">
                    <label class="page-form__form-label page-form__form-label--required" for="email">ایمیل</label>
                    <input class="page-form__form-control" name="email" id="email" type="email"
                        placeholder="example@email.com" required>
                </div>

                <div class="page-form__form-group">
                    <label class="page-form__form-label" for="company">نام شرکت</label>
                    <input class="page-form__form-control" name="company" id="company" type="text"
                        placeholder="نام شرکت یا سازمان">
                </div>

            </div>
        </fieldset>
        <fieldset class="page-form__fieldset">
            <legend class="page-form__legend">
                سوابق و تجربیات
            </legend>
            <div class="row">

                <div class="page-form__form-group">
                    <label class="page-form__form-label page-form__form-label--required" for="cv">رزومه</label>

                    <label for="cv" class="page-form__custom-file-uploader">
                        <input accept="application/pdf" class="page-form__file-uploader" name="cv" id="cv" type="file"
                            required>
                        <span class="page-form__custom-file-uploader__file-name"></span>
                        <span class="page-form__custom-file-uploader-button">انتخاب فایل
                            pdf</span>
                    </label>
                    <span class="page-form__validation-label">حداکثر حجم مجاز فایل 1 مگابایت باشد</span>
                </div>

                <div class="page-form__form-group">
                    <label class="page-form__form-label" for="potrfolio">پورتفولیو</label>

                    <label for="potrfolio" class="page-form__custom-file-uploader">
                        <input accept="application/pdf" class="page-form__file-uploader" name="portfolio" id="potrfolio"
                            type="file">
                        <span class="page-form__custom-file-uploader__file-name"></span>
                        <span class="page-form__custom-file-uploader-button">انتخاب فایل
                            pdf</span>
                    </label>
                    <span class="page-form__validation-label">حداکثر حجم مجاز فایل 1 مگابایت باشد</span>
                </div>

            </div>
        </fieldset>
        <fieldset class="page-form__fieldset">
            <legend class="page-form__legend">
                توضیات تکمیلی
            </legend>
            <div class="row">
                <div class="page-form__form-group page-form__form-select-wrapper">
                    <label class="page-form__form-label" for="partner_type">نوع ابریار</label>

                    <div class="page-form__form-control page-form__custom-select">نوع ابریار</div>
                    <div class="page-form__custom-select__options-wrapper">
                        <span class="form-group__custom-select__option">ابریار کوچ ابری</span>
                        <span class="form-group__custom-select__option">ابریار بازارچه</span>
                        <span class="form-group__custom-select__option">ابریار فنی</span>
                        <span class="form-group__custom-select__option">ابریار فروش</span>
                        <span class="form-group__custom-select__option">ابریار آموزش</span>
                    </div>
                    <input type="hidden" name="partner_type" id="partner_type">
                </div>

                <div class="page-form__form-group page-form__form-select-wrapper">
                    <label class="page-form__form-label" for="partner_level">سطح ابریار</label>

                    <div class="page-form__form-control page-form__custom-select">سطح ابریار</div>
                    <div class="page-form__custom-select__options-wrapper">
                        <span class="form-group__custom-select__option">سطح ۱</span>
                        <span class="form-group__custom-select__option">سطح ۲</span>
                        <span class="form-group__custom-select__option">سطح ۳</span>
                        <span class="form-group__custom-select__option">سطح ۴</span>
                    </div>
                    <input type="hidden" name="partner_level" id="partner_level">
                </div>
            </div>
            <div class="row">
                <div class="page-form__form-group page-form__form-textarea-wrapper">
                    <label class="page-form__form-label page-form__form-textarea-label"
                        for="description">توضیحات</label>
                    <textarea class="page-form__form-control page-form__form-textarea" id="description"
                        name="description" rows="10"
                        placeholder="در صورتی نیاز به توضیحات تکمیلی لطفا در این باکس برای ما یادداشت بگذارید"></textarea>
                </div>
            </div>
        </fieldset>
        <div class="row page-form__form-footer">
            <p id="form-validation-message" class="page-form__form-validation-message">* پر کردن فیلدهایی که با
                ستاره مشخص شده ضروری است</p>
            <button id="form-submit-button" class="button button--disabled" disabled type="submit">ثبت نام</button>
        </div>
    </form>
    </div>
</section>
