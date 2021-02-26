<section class="page-form">
    <div class="container">
        <ul class="page-breadcrumb">
            <li class="page-breadcrumb__item"><a class="page-breadcrumb__item-link" href="/">شبکه ابریارهای آروان</a>
            </li>
            <li class="page-breadcrumb__item">ثبت نام</li>
        </ul>
        <form class="page-form__box">
            <h2 class="page-form__box-title">فرم ثبت نام شبکه ابریارهای آروان</h2>
            <p class="page-form__box-subtitle">در صورتیکه مایل باشید می توانید برای ما رزومه بفرستید. لطفا فرم زیر را پر
                کنید.</p>
            <fieldset class="page-form__fieldset">
                <legend class="page-form__legend">
                    اطلاعات فردی
                </legend>
                <div class="row">

                    <div class="page-form__form-group">
                        <label class="page-form__form-label page-form__form-label--required" for="name">نام</label>
                        <input class="page-form__form-control" id="name" type="text" placeholder="نام و نام خانوادگی"
                            required>
                    </div>

                    <div class="page-form__form-group">
                        <label class="page-form__form-label page-form__form-label--required" for="tel">تلفن</label>
                        <input class="page-form__form-control" id="tel" type="tel" placeholder="0952654484" required>
                    </div>

                    <div class="page-form__form-group">
                        <label class="page-form__form-label page-form__form-label--required" for="email">ایمیل</label>
                        <input class="page-form__form-control" id="email" type="email" placeholder="example@email.com"
                            required>
                    </div>

                    <div class="page-form__form-group">
                        <label class="page-form__form-label" for="company">نام شرکت</label>
                        <input class="page-form__form-control" id="company" type="text"
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
                        <label class="page-form__form-label" for="cv">رزومه</label>
                        <input accept="*.pdf" class="page-form__file-uploader" id="cv" type="file" required>
                        <label for="cv" class="page-form__custom-file-uploader">
                            <span class="page-form__custom-file-uploader-button">انتخاب فایل pdf</span>
                        </label>
                        <span class="page-form__validation-label">حداکثر حجم مجاز فایل 1 مگابایت باشد</span>
                    </div>

                    <div class="page-form__form-group">
                        <label class="page-form__form-label" for="potrfolio">پورتفولیو</label>
                        <input accept="*.pdf" class="page-form__file-uploader" id="potrfolio" type="file" required>
                        <label for="potrfolio" class="page-form__custom-file-uploader">
                            <span class="page-form__custom-file-uploader-button">انتخاب فایل pdf</span>
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
                        <label class="page-form__form-label" for="email">نوع ابریار</label>
                        <select class="page-form__form-control page-form__form-select">
                            <option value="level1">ابریار کوچ ابری</option>
                            <option value="level2">ابریار بازارچه</option>
                            <option value="level3">ابریار فنی</option>
                            <option value="level4">ابریار فروش</option>
                            <option value="level4">ابریار آموزش</option>
                        </select>
                    </div>

                    <div class="page-form__form-group page-form__form-select-wrapper">
                        <label class="page-form__form-label" for="company">سطح ابریار</label>
                        <select class="page-form__form-control page-form__form-select">
                            <option value="level1">سطح ۱</option>
                            <option value="level2">سطح ۲</option>
                            <option value="level3">سطح ۳</option>
                            <option value="level4">سطح ۴</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="page-form__form-group page-form__form-textarea-wrapper">
                        <label class="page-form__form-label page-form__form-textarea-label"
                            for="description">توضیحات</label>
                        <textarea class="page-form__form-control page-form__form-textarea" id="description" rows="10"
                            placeholder="در صورتی نیاز به توضیحات تکمیلی لطفا در این باکس برای ما یادداشت بگذارید"></textarea>
                    </div>
                </div>
            </fieldset>
            <div class="row">
            <p class="page-form__form-description">* پر کردن فیلدهایی که با ستاره مشخص شده ضروری است</p>
            <button class="button button--disabled" type="submit" disabled>ثبت نام</button>
            </div>
        </form>
    </div>
</section>
