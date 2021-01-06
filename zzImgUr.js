$(".upload").zzImgUr({
    cliendID: "4f020a604f0858f",
    mode: "file",
    format: "o,",
    css: {
        width: "100%"
    },
    max: 10,
    loading: "http://i.imgur.com/m3NXDa6.gif",
    lang: {
        noID: "?ng d?ng chıa ğãng k?",
        addImage: "Chá»n áº£nh",
        addURL: "Thêm URL",
        reset: "Làm m?i",
        upload: "T?i lên",
        choose: "Ğ? ch?n",
        waitConnect: "Ğang k?t n?i...",
        waitUpload: "Ğang t?i lên...",
        noteURL: "Nh?p URL ?nh vào ğây:",
        errContact: '<a href="http://devs.forumvi.com/t131-jq-plugin-jquery-plugin-zzimgur#831" rel="nofollow" target="_blank">Nh?n vào ğây</a> ğ? báo l?i.',
        errURL: "URL không truy c?p ğı?c.",
        errSize: "URL l?i ho?c kích thı?c quá nh?.",
        errRepeat: "URL không h?p l? ho?c ğ? ğı?c s? d?ng."
    },
    success: function (firstVal, arrVal) {
        console.log(firstVal);
        console.log(arrVal);
    },
    input: function (arrInput) {
        console.log(arrInput);
        arrInput.click(function () {
            this.select();
            console.log(this);
        });
    },
    remove: function (firstVal, arrVal) {
        console.log(firstVal);
        console.log(arrVal);
    }
});