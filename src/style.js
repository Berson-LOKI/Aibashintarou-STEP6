const form = document.getElementById("contactForm");

if (form) {
    form.addEventListener("submit", function(event) {

        const name = document.querySelector('[name="name"]').value;
        const company = document.querySelector('[name="company"]').value;
        const email = document.querySelector('[name="email"]').value;
        const age = document.querySelector('[name="age"]').value;
        const message = document.querySelector('[name="message"]').value;

        if (
            name.trim() === "" ||
            company.trim() === "" ||
            email.trim() === "" ||
            age.trim() === "" ||
            message.trim() === ""
        ) {
            alert("必須項目は未入力です。入力内容をご確認ください。");
            event.preventDefault();
            return;
        }

        const result = confirm(
            "以下の内容で送信してもよろしいですか？\n\n" +
            "お名前：" + name + "\n" +
            "会社名：" + company + "\n" +
            "メールアドレス：" + email + "\n" +
            "年齢：" + age + "\n" +
            "お問い合わせ内容：" + message
        );

        if (result === false) {
            event.preventDefault();
        }
    });
}

const button = document.querySelector("footer button");
const footer = document.querySelector("footer");

const colors = ["blue", "red", "yellow", "gray"];
let colorIndex = 0;

if (button && footer) {
    button.addEventListener("click", function() {
        footer.style.backgroundColor = colors[colorIndex];

        colorIndex++;

        if (colorIndex >= colors.length) {
            colorIndex = 0;
        }
    });
}