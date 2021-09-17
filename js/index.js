// Скрипт swiper-slider
new Swiper(".testimonials__slider", {
    //стрелки
    navigation: {
        nextEl: "swiper-button-next",
        prevEl: "swiper-button-prev",
    },
    // Дотсы
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    //изменение  курсора
    grabCursor: true,

    //пеертаскивание с меньшим усилием
    tochRatio: 1,

    //скролл с помощью колеса  мыши
    // mousewheel: {

    //чувствительность колеса мыши
    // sensitivity: 1,
    // },

    //автовысота (на случай текста разного объема)
    // autoHeight: true,

    //колличество слайдов при показе
    slidesPerView: 2.5,

    //если слайдов меньше чем нужно, например только 1, то слайдер отключится и этот слайд будет оказыватсья просто ввиде контента
    watchOverflow: true,

    //отступ между слайдами
    spaceBetween: 177.5,

    //кол-во пролистываемых слайдов
    slidesPerGroup: 1,

    //активный слайд по центру
    centeredSlides: true,

    //стартовый слайд
    // initialSlide: 1,

    //бесконечная прокрутка
    loop: true,

    //свободный режим (нужен для плавного скрола и для плавного перемещения слайдов мышью)
    // freeMode: true,

    speed: 800,
    //автопрокрутка  слайдов
    // autoplay: {
    //пауза между прокруткой
    // delay: 1000,

    //закончить на последнем слайде
    // stopOnLastSlide: true,

    //отключить после ручного переключения
    // disableOnInteraction: true,
    // }

    //сделать слайдер вертикальным
    // direction: 'vertical',

    breakpoints: {
        320: {
            //колличество слайдов при показе
            slidesPerView: 1,
        },
        480: {
            //колличество слайдов при показе
            slidesPerView: 1,
        },
        767: {
            //колличество слайдов при показе
            slidesPerView: 1,
        },

        768: {
            //колличество слайдов при показе
            slidesPerView: 1,
            spaceBetween: 100,
        },
        992: {
            //колличество слайдов при показе
            slidesPerView: 2,
            spaceBetween: 100,
        },
    },
});

// скрипт для модалки
var modal = document.getElementById("my_modal");
var btn = document.getElementsByClassName("Get");
var close = document.getElementsByClassName("close_modal_window")[0];
var body = document.querySelector("body");
var modalCall = document.querySelector('#modalCall')

for (var i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", function() {
        openModalWindow();
    });
}

close.addEventListener("click", function() {
    closeModalWindow();
});
modalCall.addEventListener("click", function() {
    closeModalWindow();
});

function openModalWindow() {
    modal.classList.add("open__modal");
    body.classList.add("wrapper");
}

function closeModalWindow() {
    modal.classList.remove("open__modal");
    body.classList.remove("wrapper");
}

//скрипт для  модалки quote
var quote = document.getElementById("my_quote");
var submit = document.getElementsByClassName("Submit");
var closeQuote = document.getElementsByClassName("close_quote_window")[0];
var body = document.querySelector("body");
var quoteCall = document.querySelector('#quoteCall')

for (var i = 0; i < submit.length; i++) {
    submit[i].addEventListener("click", function() {
        openQuoteWindow();
    });
}

closeQuote.addEventListener("click", function() {
    closeQuoteWindow();
});
quoteCall.addEventListener("click", function() {
    closeQuoteWindow();
});

function openQuoteWindow() {
    quote.classList.add("quote__open");
    modal.classList.remove("open__modal");
    body.classList.add("wrapper");
}

function closeQuoteWindow() {
    quote.classList.remove("quote__open");
    modal.classList.remove("open__modal");
    body.classList.remove("wrapper");
}


// вызываем окно call

$("#call").click(function() {
    $("#my_call").addClass("open__modal");
    console.log('321')

});
$("#quoteCall").click(function() {
    $("#my_call").addClass("open__modal");
    // console.log('321')

});
$("#modalCall").click(function() {
    $("#my_call").addClass("open__modal");
    console.log('321')

});
$("#HeaderCall").click(function() {
    $("#my_call").addClass("open__modal");

});

callButton
$(".close_call_window").click(function() {
    $("#my_call").removeClass("open__modal");
    console.log("fffff");


});
$("#callButton").click(function() {
    $("#my_call").removeClass("open__modal");
    console.log("fffff");


});

$(".close_quote_window").click(function() {
    $("#my_call").removeClass("open__modal");
});


// валидация с формой  modalForm
const modal__name = document.querySelector("#modal__name");
const modal__phone = document.querySelector("#modal__phone");
const modal__email = document.querySelector("#modal__email");
const modal__checkbox = document.querySelector("#modalCheckbox");
const modalButton = document.querySelector("#modalButton");
const close_modal_window = document.querySelector(".close_modal_window");

// Обработчик событий, когда страница отрисовалась
document.addEventListener("DOMContentLoaded", () => {
    //   Вызываем метод проверки валидации и сразу устанавливаем дизейблед кнопку внутри функции
    modalValidate();
});

const modalValidate = () => {
    //   Проверяем если поле нейм и телефон заполнены а так же если чекнуто соглашение и разблокируем кнопку
    if (
        modal__name.value.trim() &&
        modal__phone.value.trim() &&
        modal__email.value.trim() &&
        modal__checkbox.checked
    ) {
        modalButton.disabled = false;
    }
    //  В противном случае блокируем кнопку
    else {
        modalButton.disabled = true;
    }
};

// Вызываем валидацию каждый раз когда меняем значения в инпуте нейм
modal__name.addEventListener("input", (e) => {
    modalValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте телефона
modal__phone.addEventListener("input", (e) => {
    modalValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте почты
modal__email.addEventListener("input", (e) => {
    modalValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте соглашения
modal__checkbox.addEventListener("change", (e) => {
    modalValidate();
});

// Если кнопку можно нажать то отправляем данные любым способом
modalButton.addEventListener("click", (e) => {
    e.preventDefault();
    // console.log('nameField', nameField.value)
    // console.log('phoneField', phoneField.value)
    // console.log('agreementField', agreementField.checked)
    closeModalWindow();

    modal__name.value = "";
    modal__phone.value = "";
    modal__email.value = "";
    modal__checkbox.checked = false;
    modalButton.disabled = true;
});
close_modal_window.addEventListener("click", (e) => {
    e.preventDefault();
    // console.log('nameField', nameField.value)
    // console.log('phoneField', phoneField.value)
    // console.log('agreementField', agreementField.checked)

    modal__name.value = "";
    modal__phone.value = "";
    modal__email.value = "";
    modal__checkbox.checked = false;
    modalButton.disabled = true;
});
modalCall.addEventListener("click", (e) => {
    modal__name.value = "";
    modal__phone.value = "";
    modal__email.value = "";
    modal__checkbox.checked = false;
    modalButton.disabled = true;
});


// валидация с формой  callForm 
// Получаем все поля и кнопку
const nameField = document.querySelector("#call__name");
const phoneField = document.querySelector("#call__phone");
const agreementField = document.querySelector("#callCheckbox");
const submitButton = document.querySelector("#callButton");
const closeCallWwindow = document.querySelector(".close_call_window");

// Обработчик событий, когда страница отрисовалась
document.addEventListener("DOMContentLoaded", () => {
    //   Вызываем метод проверки валидации и сразу устанавливаем дизейблед кнопку внутри функции
    checkIsValidate();
});

const checkIsValidate = () => {
    //   Проверяем если поле нейм и телефон заполнены а так же если чекнуто соглашение и разблокируем кнопку
    if (
        nameField.value.trim() &&
        phoneField.value.trim() &&
        agreementField.checked
    ) {
        submitButton.disabled = false;
    }
    //  В противном случае блокируем кнопку
    else {
        submitButton.disabled = true;
    }
};

// Вызываем валидацию каждый раз когда меняем значения в инпуте нейм
nameField.addEventListener("input", (e) => {
    checkIsValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте телефона
phoneField.addEventListener("input", (e) => {
    checkIsValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте соглашения
agreementField.addEventListener("change", (e) => {
    checkIsValidate();
});

// Если кнопку можно нажать то отправляем данные любым способом
submitButton.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("nameField", nameField.value);
    console.log("phoneField", phoneField.value);
    console.log("agreementField", agreementField.checked);

    nameField.value = "";
    phoneField.value = "";
    agreementField.checked = false;
    submitButton.disabled = true;
});
// если окно закрыли, то меням состояние  элементов формы
closeCallWwindow.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("nameField", nameField.value);
    console.log("phoneField", phoneField.value);
    console.log("agreementField", agreementField.checked);

    nameField.value = "";
    phoneField.value = "";
    agreementField.checked = false;
    submitButton.disabled = true;
});


// валидация с формой mapForm
// Получаем все поля и кнопку
const formName = document.querySelector("#formName");
const formPhone = document.querySelector("#formPhone");
const formEmail = document.querySelector("#formEmail");
const formCheckbox = document.querySelector("#mapCheckbox");
const formButton = document.querySelector("#mapButton");

// Обработчик событий, когда страница отрисовалась
document.addEventListener("DOMContentLoaded", () => {
    //   Вызываем метод проверки валидации и сразу устанавливаем дизейблед кнопку внутри функции
    formValidate();
});

const formValidate = () => {
    //   Проверяем если поле нейм и телефон заполнены а так же если чекнуто соглашение и разблокируем кнопку
    if (
        formName.value.trim() &&
        formPhone.value.trim() &&
        formEmail.value.trim() &&
        formCheckbox.checked
    ) {
        formButton.disabled = false;

        // console.log(formButton.disabled)
    }
    //  В противном случае блокируем кнопку
    else {
        formButton.disabled = true;
    }
};

// Вызываем валидацию каждый раз когда меняем значения в инпуте нейм
formName.addEventListener("input", (e) => {
    formValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте телефона
formPhone.addEventListener("input", (e) => {
    formValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте почты
formEmail.addEventListener("input", (e) => {
    formValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте соглашения
formCheckbox.addEventListener("change", (e) => {
    formValidate();
});

// Если кнопку можно нажать то отправляем данные любым способом
formButton.addEventListener("click", (e) => {
    e.preventDefault();
    // console.log('nameField', nameField.value)
    // console.log('phoneField', phoneField.value)
    // console.log('agreementField', agreementField.checked)

    formName.value = "";
    formPhone.value = "";
    formEmail.value = "";
    formCheckbox.checked = false;
    formButton.disabled = true;
});

// валидация с формой questionsForm
// Получаем все поля и кнопку
const questionsName = document.querySelector("#questionsName");
const questionsPhone = document.querySelector("#questionsPhone");
const questionsEmail = document.querySelector("#questionsEmail");
const questionsMessage = document.querySelector("#questionsMessage");
const questionsCheckbox = document.querySelector("#questionsCheckbox");
const questionsButton = document.querySelector("#questionsButton");

// Обработчик событий, когда страница отрисовалась
document.addEventListener("DOMContentLoaded", () => {
    //   Вызываем метод проверки валидации и сразу устанавливаем дизейблед кнопку внутри функции
    questionsValidate();
});

const questionsValidate = () => {
    //   Проверяем если поле нейм и телефон заполнены а так же если чекнуто соглашение и разблокируем кнопку
    if (
        questionsName.value.trim() &&
        questionsPhone.value.trim() &&
        questionsEmail.value.trim() &&
        questionsMessage.value.trim() &&
        questionsCheckbox.checked
    ) {
        questionsButton.disabled = false;

        // console.log(formButton.disabled)
    }
    //  В противном случае блокируем кнопку
    else {
        questionsButton.disabled = true;
    }
};

// Вызываем валидацию каждый раз когда меняем значения в инпуте нейм
questionsName.addEventListener("input", (e) => {
    questionsValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте телефона
questionsPhone.addEventListener("input", (e) => {
    questionsValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте почты
questionsEmail.addEventListener("input", (e) => {
    questionsValidate();
});
questionsMessage.addEventListener("input", (e) => {
    questionsValidate();
});

// Вызываем валидацию каждый раз когда меняем значения в инпуте соглашения
questionsCheckbox.addEventListener("change", (e) => {
    questionsValidate();
});

// Если кнопку можно нажать то отправляем данные любым способом
questionsButton.addEventListener("click", (e) => {
    e.preventDefault();
    // console.log('nameField', nameField.value)
    // console.log('phoneField', phoneField.value)
    // console.log('agreementField', agreementField.checked)

    questionsName.value = "";
    questionsPhone.value = "";
    questionsEmail.value = "";
    questionsMessage.value = "";
    questionsCheckbox.checked = false;
    questionsButton.disabled = true;
});