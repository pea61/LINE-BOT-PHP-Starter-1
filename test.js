var login = require("facebook-chat-api");

var request = require('request');

login({email: "Email สำหรับ Login Facebook ของบอท", password: "Password Facebook ของบอท"}, function callback (err, api) {

    if(err) return console.error(err);

 

    var stopListening = api.listen((err, event) => {

        if(err) return console.error(err);

 

        api.markAsRead(event.threadID, (err) => {

            if(err) console.error(err);

        });

 

        switch(event.type) {

            case "message":

                if(event.body == 'เปิดไฟ') {     //เมื่อพิมพ์ Chat ไปหาบอทว่า เปิดไฟ สามารถแก้ไขข้อความได้ตรงนี้

                    api.sendMessage("เปิดไฟแล้วค่ะ", event.threadID);      // ข้อความบอท ที่ตอบกลับมาว่า เปิดไฟแล้วค่ะ
 })

                }

                else if(event.body == 'ปิดไฟ'){

 api.sendMessage("ปิดไฟแล้วค่ะ", event.threadID);


 })

                }

                else{

                 api.sendMessage("Bot : ฉันไม่เข้าใจคำสั่ง " + event.body, event.threadID);

                break;

                }

            case "event":

                console.log(event);

                break;

        }

    });

});
