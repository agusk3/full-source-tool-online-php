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
        noID: "?ng d?ng ch�a ��ng k?",
        addImage: "Chọn ảnh",
        addURL: "Th�m URL",
        reset: "L�m m?i",
        upload: "T?i l�n",
        choose: "�? ch?n",
        waitConnect: "�ang k?t n?i...",
        waitUpload: "�ang t?i l�n...",
        noteURL: "Nh?p URL ?nh v�o ��y:",
        errContact: '<a href="http://devs.forumvi.com/t131-jq-plugin-jquery-plugin-zzimgur#831" rel="nofollow" target="_blank">Nh?n v�o ��y</a> �? b�o l?i.',
        errURL: "URL kh�ng truy c?p ��?c.",
        errSize: "URL l?i ho?c k�ch th�?c qu� nh?.",
        errRepeat: "URL kh�ng h?p l? ho?c �? ��?c s? d?ng."
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