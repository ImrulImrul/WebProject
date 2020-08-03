<html>
<head>
  <title>Select Student Level </title>
 
<style>
* {
  box-sizing: border-box;
}

html, body {
  height: 100%;
}

body {
  margin: 0;
  padding: 0;
  background: #c0392b;
}

h1 {
  height: 108px;
  font: bold 36px/108px sans-serif;
  text-transform: uppercase;
  color: #7d251c;
}

#vcent {
  position: absolute;
  top: 50%;
  left: 50%;
  height: 331px;
  width: 874px;
  margin: -165.5px 0 0 -437px;
  text-align: center;
}

input {
  position: absolute;
  left: -99999px;
}

label {
  cursor: pointer;
  position: absolute;
  height: 115px;
  width: 242px;
  border-left: 12px solid #d7584b;
  border-right: 0 solid #c0392b;
  font: bold 24px / 115px sans-serif;
  text-align: center;
  text-transform: uppercase;
  color: #902b20;
  background: #d24435;
  -moz-transition: background 2s, width 0.5s 0.5s, border-left 0.5s 0.5s, border-right 0.5s, box-shadow 0.5s 0;
  -o-transition: background 2s, width 0.5s 0.5s, border-left 0.5s 0.5s, border-right 0.5s, box-shadow 0.5s 0;
  -webkit-transition: background 2s, width 0.5s, border-left 0.5s, border-right 0.5s, box-shadow 0.5s 0;
  -webkit-transition-delay: 0s, 0.5s, 0.5s, 0s, 0s;
  transition: background 2s, width 0.5s 0.5s, border-left 0.5s 0.5s, border-right 0.5s, box-shadow 0.5s 0;
  box-shadow: 1px 1px #b63629, 2px 2px #b63629, 3px 3px #b63629, 4px 4px #b63629, 5px 5px #b63629, 6px 6px #b63629, 7px 7px #b63629, 8px 8px #b63629, 9px 9px #b63629, 10px 10px #b63629, 11px 11px #b63629, 12px 12px #b63629, 13px 13px #b63629, 14px 14px #b63629, 15px 15px #b63629, 16px 16px #b63629, 17px 17px #b63629, 18px 18px #b63629, 19px 19px #b63629, 20px 20px #b63629, 21px 21px #b63629, 22px 22px #b63629, 23px 23px #b63629, 24px 24px #b63629, 25px 25px #b63629, 26px 26px #b63629, 27px 27px #b63629, 28px 28px #b63629, 29px 29px #b63629, 30px 30px #b63629, 31px 31px #b63629, 32px 32px #b63629, 33px 33px #b63629, 34px 34px #b63629, 35px 35px #b63629, 36px 36px #b63629, 37px 37px #b63629, 38px 38px #b63629, 39px 39px #b63629, 40px 40px #b63629, 41px 41px #b63629, 42px 42px #b63629, 43px 43px #b63629, 44px 44px #b63629, 45px 45px #b63629, 46px 46px #b63629, 47px 47px #b63629, 48px 48px #b63629, 49px 49px #b63629, 50px 50px #b63629, 51px 51px #b63629, 52px 52px #b63629, 53px 53px #b63629, 54px 54px #b63629, 55px 55px #b63629, 56px 56px #b63629, 57px 57px #b63629, 58px 58px #b63629, 59px 59px #b63629, 60px 60px #b63629, 61px 61px #b63629, 62px 62px #b63629, 63px 63px #b63629, 64px 64px #b63629, 65px 65px #b63629, 66px 66px #b63629, 67px 67px #b63629, 68px 68px #b63629, 69px 69px #b63629, 70px 70px #b63629, 71px 71px #b63629, 72px 72px #b63629, 73px 73px #b63629, 74px 74px #b63629, 75px 75px #b63629, 76px 76px #b63629, 77px 77px #b63629, 78px 78px #b63629, 79px 79px #b63629, 80px 80px #b63629, 81px 81px #b63629, 82px 82px #b63629, 83px 83px #b63629, 84px 84px #b63629, 85px 85px #b63629, 86px 86px #b63629, 87px 87px #b63629, 88px 88px #b63629, 89px 89px #b63629, 90px 90px #b63629, 91px 91px #b63629, 92px 92px #b63629, 93px 93px #b63629, 94px 94px #b63629, 95px 95px #b63629, 96px 96px #b63629, 97px 97px #b63629, 98px 98px #b63629, 99px 99px #b63629, 100px 100px #b63629, 101px 101px #b63629, 102px 102px #b63629, 103px 103px #b63629, 104px 104px #b63629, 105px 105px #b63629, 106px 106px #b63629, 107px 107px #b63629, 108px 108px #b63629, 109px 109px #b63629, 110px 110px #b63629, 111px 111px #b63629, 112px 112px #b63629, 113px 113px #b63629, 114px 114px #b63629, 115px 115px #b63629, 116px 116px #b63629, 117px 117px #b63629, 118px 118px #b63629, 119px 119px #b63629, 120px 120px #b63629, 121px 121px #b63629, 122px 122px #b63629, 123px 123px #b63629, 124px 124px #b63629, 125px 125px #b63629, 126px 126px #b63629, 127px 127px #b63629, 128px 128px #b63629, 129px 129px #b63629, 130px 130px #b63629, 131px 131px #b63629, 132px 132px #b63629, 133px 133px #b63629, 134px 134px #b63629, 135px 135px #b63629, 136px 136px #b63629, 137px 137px #b63629, 138px 138px #b63629, 139px 139px #b63629, 140px 140px #b63629, 141px 141px #b63629, 142px 142px #b63629, 143px 143px #b63629, 144px 144px #b63629, 145px 145px #b63629, 146px 146px #b63629, 147px 147px #b63629, 148px 148px #b63629, 149px 149px #b63629, 150px 150px #b63629, 151px 151px #b63629, 152px 152px #b63629, 153px 153px #b63629, 154px 154px #b63629, 155px 155px #b63629, 156px 156px #b63629, 157px 157px #b63629, 158px 158px #b63629, 159px 159px #b63629, 160px 160px #b63629, 161px 161px #b63629, 162px 162px #b63629, 163px 163px #b63629, 164px 164px #b63629, 165px 165px #b63629, 166px 166px #b63629, 167px 167px #b63629, 168px 168px #b63629, 169px 169px #b63629, 170px 170px #b63629, 171px 171px #b63629, 172px 172px #b63629, 173px 173px #b63629, 174px 174px #b63629, 175px 175px #b63629, 176px 176px #b63629, 177px 177px #b63629, 178px 178px #b63629, 179px 179px #b63629, 180px 180px #b63629, 181px 181px #b63629, 182px 182px #b63629, 183px 183px #b63629, 184px 184px #b63629, 185px 185px #b63629, 186px 186px #b63629, 187px 187px #b63629, 188px 188px #b63629, 189px 189px #b63629, 190px 190px #b63629, 191px 191px #b63629, 192px 192px #b63629, 193px 193px #b63629, 194px 194px #b63629, 195px 195px #b63629, 196px 196px #b63629, 197px 197px #b63629, 198px 198px #b63629, 199px 199px #b63629, 200px 200px #b63629, 201px 201px #b63629, 202px 202px #b63629, 203px 203px #b63629, 204px 204px #b63629, 205px 205px #b63629, 206px 206px #b63629, 207px 207px #b63629, 208px 208px #b63629, 209px 209px #b63629, 210px 210px #b63629, 211px 211px #b63629, 212px 212px #b63629, 213px 213px #b63629, 214px 214px #b63629, 215px 215px #b63629, 216px 216px #b63629, 217px 217px #b63629, 218px 218px #b63629, 219px 219px #b63629, 220px 220px #b63629, 221px 221px #b63629, 222px 222px #b63629, 223px 223px #b63629, 224px 224px #b63629, 225px 225px #b63629, 226px 226px #b63629, 227px 227px #b63629, 228px 228px #b63629, 229px 229px #b63629, 230px 230px #b63629, 231px 231px #b63629, 232px 232px #b63629, 233px 233px #b63629, 234px 234px #b63629, 235px 235px #b63629, 236px 236px #b63629, 237px 237px #b63629, 238px 238px #b63629, 239px 239px #b63629, 240px 240px #b63629, 241px 241px #b63629, 242px 242px #b63629, 243px 243px #b63629, 244px 244px #b63629, 245px 245px #b63629, 246px 246px #b63629, 247px 247px #b63629, 248px 248px #b63629, 249px 249px #b63629, 250px 250px #b63629, 251px 251px #b63629, 252px 252px #b63629, 253px 253px #b63629, 254px 254px #b63629, 255px 255px #b63629, 256px 256px #b63629, 257px 257px #b63629, 258px 258px #b63629, 259px 259px #b63629, 260px 260px #b63629, 261px 261px #b63629, 262px 262px #b63629, 263px 263px #b63629, 264px 264px #b63629, 265px 265px #b63629, 266px 266px #b63629, 267px 267px #b63629, 268px 268px #b63629, 269px 269px #b63629, 270px 270px #b63629, 271px 271px #b63629, 272px 272px #b63629, 273px 273px #b63629, 274px 274px #b63629, 275px 275px #b63629, 276px 276px #b63629, 277px 277px #b63629, 278px 278px #b63629, 279px 279px #b63629, 280px 280px #b63629, 281px 281px #b63629, 282px 282px #b63629, 283px 283px #b63629, 284px 284px #b63629, 285px 285px #b63629, 286px 286px #b63629, 287px 287px #b63629, 288px 288px #b63629, 289px 289px #b63629, 290px 290px #b63629, 291px 291px #b63629, 292px 292px #b63629, 293px 293px #b63629, 294px 294px #b63629, 295px 295px #b63629, 296px 296px #b63629, 297px 297px #b63629, 298px 298px #b63629, 299px 299px #b63629, 300px 300px #b63629, 301px 301px #b63629, 302px 302px #b63629, 303px 303px #b63629, 304px 304px #b63629, 305px 305px #b63629, 306px 306px #b63629, 307px 307px #b63629, 308px 308px #b63629, 309px 309px #b63629, 310px 310px #b63629, 311px 311px #b63629, 312px 312px #b63629, 313px 313px #b63629, 314px 314px #b63629, 315px 315px #b63629, 316px 316px #b63629, 317px 317px #b63629, 318px 318px #b63629, 319px 319px #b63629, 320px 320px #b63629, 321px 321px #b63629, 322px 322px #b63629, 323px 323px #b63629, 324px 324px #b63629, 325px 325px #b63629, 326px 326px #b63629, 327px 327px #b63629, 328px 328px #b63629, 329px 329px #b63629, 330px 330px #b63629, 331px 331px #b63629, 332px 332px #b63629, 333px 333px #b63629, 334px 334px #b63629, 335px 335px #b63629, 336px 336px #b63629, 337px 337px #b63629, 338px 338px #b63629, 339px 339px #b63629, 340px 340px #b63629, 341px 341px #b63629, 342px 342px #b63629, 343px 343px #b63629, 344px 344px #b63629, 345px 345px #b63629, 346px 346px #b63629, 347px 347px #b63629, 348px 348px #b63629, 349px 349px #b63629, 350px 350px #b63629, 351px 351px #b63629, 352px 352px #b63629, 353px 353px #b63629, 354px 354px #b63629, 355px 355px #b63629, 356px 356px #b63629, 357px 357px #b63629, 358px 358px #b63629, 359px 359px #b63629, 360px 360px #b63629, 361px 361px #b63629, 362px 362px #b63629, 363px 363px #b63629, 364px 364px #b63629, 365px 365px #b63629, 366px 366px #b63629, 367px 367px #b63629, 368px 368px #b63629, 369px 369px #b63629, 370px 370px #b63629, 371px 371px #b63629, 372px 372px #b63629, 373px 373px #b63629, 374px 374px #b63629, 375px 375px #b63629, 376px 376px #b63629, 377px 377px #b63629, 378px 378px #b63629, 379px 379px #b63629, 380px 380px #b63629, 381px 381px #b63629, 382px 382px #b63629, 383px 383px #b63629, 384px 384px #b63629, 385px 385px #b63629, 386px 386px #b63629, 387px 387px #b63629, 388px 388px #b63629, 389px 389px #b63629, 390px 390px #b63629, 391px 391px #b63629, 392px 392px #b63629, 393px 393px #b63629, 394px 394px #b63629, 395px 395px #b63629, 396px 396px #b63629, 397px 397px #b63629, 398px 398px #b63629, 399px 399px #b63629, 400px 400px #b63629, 401px 401px #b63629, 402px 402px #b63629, 403px 403px #b63629, 404px 404px #b63629, 405px 405px #b63629, 406px 406px #b63629, 407px 407px #b63629, 408px 408px #b63629, 409px 409px #b63629, 410px 410px #b63629, 411px 411px #b63629, 412px 412px #b63629, 413px 413px #b63629, 414px 414px #b63629, 415px 415px #b63629, 416px 416px #b63629, 417px 417px #b63629, 418px 418px #b63629, 419px 419px #b63629, 420px 420px #b63629, 421px 421px #b63629, 422px 422px #b63629, 423px 423px #b63629, 424px 424px #b63629, 425px 425px #b63629, 426px 426px #b63629, 427px 427px #b63629, 428px 428px #b63629, 429px 429px #b63629, 430px 430px #b63629, 431px 431px #b63629, 432px 432px #b63629, 433px 433px #b63629, 434px 434px #b63629, 435px 435px #b63629, 436px 436px #b63629, 437px 437px #b63629, 438px 438px #b63629, 439px 439px #b63629, 440px 440px #b63629, 441px 441px #b63629, 442px 442px #b63629, 443px 443px #b63629, 444px 444px #b63629, 445px 445px #b63629, 446px 446px #b63629, 447px 447px #b63629, 448px 448px #b63629, 449px 449px #b63629, 450px 450px #b63629, 451px 451px #b63629, 452px 452px #b63629, 453px 453px #b63629, 454px 454px #b63629, 455px 455px #b63629, 456px 456px #b63629, 457px 457px #b63629, 458px 458px #b63629, 459px 459px #b63629, 460px 460px #b63629, 461px 461px #b63629, 462px 462px #b63629, 463px 463px #b63629, 464px 464px #b63629, 465px 465px #b63629, 466px 466px #b63629, 467px 467px #b63629, 468px 468px #b63629, 469px 469px #b63629, 470px 470px #b63629, 471px 471px #b63629, 472px 472px #b63629, 473px 473px #b63629, 474px 474px #b63629, 475px 475px #b63629, 476px 476px #b63629, 477px 477px #b63629, 478px 478px #b63629, 479px 479px #b63629, 480px 480px #b63629, 481px 481px #b63629, 482px 482px #b63629, 483px 483px #b63629, 484px 484px #b63629, 485px 485px #b63629, 486px 486px #b63629, 487px 487px #b63629, 488px 488px #b63629, 489px 489px #b63629, 490px 490px #b63629, 491px 491px #b63629, 492px 492px #b63629, 493px 493px #b63629, 494px 494px #b63629, 495px 495px #b63629, 496px 496px #b63629, 497px 497px #b63629, 498px 498px #b63629, 499px 499px #b63629, 500px 500px #b63629, 501px 501px #b63629, 502px 502px #b63629, 503px 503px #b63629, 504px 504px #b63629, 505px 505px #b63629, 506px 506px #b63629, 507px 507px #b63629, 508px 508px #b63629, 509px 509px #b63629, 510px 510px #b63629, 511px 511px #b63629, 512px 512px #b63629, 513px 513px #b63629, 514px 514px #b63629, 515px 515px #b63629, 516px 516px #b63629, 517px 517px #b63629, 518px 518px #b63629, 519px 519px #b63629, 520px 520px #b63629, 521px 521px #b63629, 522px 522px #b63629, 523px 523px #b63629, 524px 524px #b63629, 525px 525px #b63629, 526px 526px #b63629, 527px 527px #b63629, 528px 528px #b63629, 529px 529px #b63629, 530px 530px #b63629, 531px 531px #b63629, 532px 532px #b63629, 533px 533px #b63629, 534px 534px #b63629, 535px 535px #b63629, 536px 536px #b63629, 537px 537px #b63629, 538px 538px #b63629, 539px 539px #b63629, 540px 540px #b63629, 541px 541px #b63629, 542px 542px #b63629, 543px 543px #b63629, 544px 544px #b63629, 545px 545px #b63629, 546px 546px #b63629, 547px 547px #b63629, 548px 548px #b63629, 549px 549px #b63629, 550px 550px #b63629, 551px 551px #b63629, 552px 552px #b63629, 553px 553px #b63629, 554px 554px #b63629, 555px 555px #b63629, 556px 556px #b63629, 557px 557px #b63629, 558px 558px #b63629, 559px 559px #b63629, 560px 560px #b63629, 561px 561px #b63629, 562px 562px #b63629, 563px 563px #b63629, 564px 564px #b63629, 565px 565px #b63629, 566px 566px #b63629, 567px 567px #b63629, 568px 568px #b63629, 569px 569px #b63629, 570px 570px #b63629, 571px 571px #b63629, 572px 572px #b63629, 573px 573px #b63629, 574px 574px #b63629, 575px 575px #b63629, 576px 576px #b63629, 577px 577px #b63629, 578px 578px #b63629, 579px 579px #b63629, 580px 580px #b63629, 581px 581px #b63629, 582px 582px #b63629, 583px 583px #b63629, 584px 584px #b63629, 585px 585px #b63629, 586px 586px #b63629, 587px 587px #b63629, 588px 588px #b63629, 589px 589px #b63629, 590px 590px #b63629, 591px 591px #b63629, 592px 592px #b63629, 593px 593px #b63629, 594px 594px #b63629, 595px 595px #b63629, 596px 596px #b63629, 597px 597px #b63629, 598px 598px #b63629, 599px 599px #b63629, 600px 600px #b63629, 601px 601px #b63629, 602px 602px #b63629, 603px 603px #b63629, 604px 604px #b63629, 605px 605px #b63629, 606px 606px #b63629, 607px 607px #b63629, 608px 608px #b63629, 609px 609px #b63629, 610px 610px #b63629, 611px 611px #b63629, 612px 612px #b63629, 613px 613px #b63629, 614px 614px #b63629, 615px 615px #b63629, 616px 616px #b63629, 617px 617px #b63629, 618px 618px #b63629, 619px 619px #b63629, 620px 620px #b63629, 621px 621px #b63629, 622px 622px #b63629, 623px 623px #b63629, 624px 624px #b63629, 625px 625px #b63629, 626px 626px #b63629, 627px 627px #b63629, 628px 628px #b63629, 629px 629px #b63629, 630px 630px #b63629, 631px 631px #b63629, 632px 632px #b63629, 633px 633px #b63629, 634px 634px #b63629, 635px 635px #b63629, 636px 636px #b63629, 637px 637px #b63629, 638px 638px #b63629, 639px 639px #b63629, 640px 640px #b63629, 641px 641px #b63629, 642px 642px #b63629, 643px 643px #b63629, 644px 644px #b63629, 645px 645px #b63629, 646px 646px #b63629, 647px 647px #b63629, 648px 648px #b63629, 649px 649px #b63629, 650px 650px #b63629, 651px 651px #b63629, 652px 652px #b63629, 653px 653px #b63629, 654px 654px #b63629, 655px 655px #b63629, 656px 656px #b63629, 657px 657px #b63629, 658px 658px #b63629, 659px 659px #b63629, 660px 660px #b63629, 661px 661px #b63629, 662px 662px #b63629, 663px 663px #b63629, 664px 664px #b63629, 665px 665px #b63629, 666px 666px #b63629, 667px 667px #b63629, 668px 668px #b63629, 669px 669px #b63629, 670px 670px #b63629, 671px 671px #b63629, 672px 672px #b63629, 673px 673px #b63629, 674px 674px #b63629, 675px 675px #b63629, 676px 676px #b63629, 677px 677px #b63629, 678px 678px #b63629, 679px 679px #b63629, 680px 680px #b63629, 681px 681px #b63629, 682px 682px #b63629, 683px 683px #b63629, 684px 684px #b63629, 685px 685px #b63629, 686px 686px #b63629, 687px 687px #b63629, 688px 688px #b63629, 689px 689px #b63629, 690px 690px #b63629, 691px 691px #b63629, 692px 692px #b63629, 693px 693px #b63629, 694px 694px #b63629, 695px 695px #b63629, 696px 696px #b63629, 697px 697px #b63629, 698px 698px #b63629, 699px 699px #b63629, 700px 700px #b63629, 701px 701px #b63629, 702px 702px #b63629, 703px 703px #b63629, 704px 704px #b63629, 705px 705px #b63629, 706px 706px #b63629, 707px 707px #b63629, 708px 708px #b63629, 709px 709px #b63629, 710px 710px #b63629, 711px 711px #b63629, 712px 712px #b63629, 713px 713px #b63629, 714px 714px #b63629, 715px 715px #b63629, 716px 716px #b63629, 717px 717px #b63629, 718px 718px #b63629, 719px 719px #b63629, 720px 720px #b63629, 721px 721px #b63629, 722px 722px #b63629, 723px 723px #b63629, 724px 724px #b63629, 725px 725px #b63629, 726px 726px #b63629, 727px 727px #b63629, 728px 728px #b63629, 729px 729px #b63629, 730px 730px #b63629, 731px 731px #b63629, 732px 732px #b63629, 733px 733px #b63629, 734px 734px #b63629, 735px 735px #b63629, 736px 736px #b63629, 737px 737px #b63629, 738px 738px #b63629, 739px 739px #b63629, 740px 740px #b63629, 741px 741px #b63629, 742px 742px #b63629, 743px 743px #b63629, 744px 744px #b63629, 745px 745px #b63629, 746px 746px #b63629, 747px 747px #b63629, 748px 748px #b63629, 749px 749px #b63629, 750px 750px #b63629, 751px 751px #b63629, 752px 752px #b63629, 753px 753px #b63629, 754px 754px #b63629, 755px 755px #b63629, 756px 756px #b63629, 757px 757px #b63629, 758px 758px #b63629, 759px 759px #b63629, 760px 760px #b63629, 761px 761px #b63629, 762px 762px #b63629, 763px 763px #b63629, 764px 764px #b63629, 765px 765px #b63629, 766px 766px #b63629, 767px 767px #b63629, 768px 768px #b63629, 769px 769px #b63629, 770px 770px #b63629, 771px 771px #b63629, 772px 772px #b63629, 773px 773px #b63629, 774px 774px #b63629, 775px 775px #b63629, 776px 776px #b63629, 777px 777px #b63629, 778px 778px #b63629, 779px 779px #b63629, 780px 780px #b63629, 781px 781px #b63629, 782px 782px #b63629, 783px 783px #b63629, 784px 784px #b63629, 785px 785px #b63629, 786px 786px #b63629, 787px 787px #b63629, 788px 788px #b63629, 789px 789px #b63629, 790px 790px #b63629, 791px 791px #b63629, 792px 792px #b63629, 793px 793px #b63629, 794px 794px #b63629, 795px 795px #b63629, 796px 796px #b63629, 797px 797px #b63629, 798px 798px #b63629, 799px 799px #b63629, 800px 800px #b63629;
}
label:nth-child(2) {
  left: 0px;
}
label:nth-child(4) {
  left: 322px;
}
label:nth-child(6) {
  left: 644px;
}
input:checked + label {
  width: 218px;
  border-left-width: 0;
  border-left-color: #c0392b;
  border-right-width: 12px;
  border-right-color: #d24435;
  color: #6a1f18;
  background: #ad3327;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  -moz-transition: color 2s, background 2s, width 0.5s, border-left 0.5s, border-right 0.5s 0.5s, box-shadow 0.5s 0;
  -o-transition: color 2s, background 2s, width 0.5s, border-left 0.5s, border-right 0.5s 0.5s, box-shadow 0.5s 0;
  -webkit-transition: color 2s, background 2s, width 0.5s, border-left 0.5s, border-right 0.5s, box-shadow 0.5s 0;
  -webkit-transition-delay: 0s, 0s, 0s, 0s, 0.5s, 0s;
  transition: color 2s, background 2s, width 0.5s, border-left 0.5s, border-right 0.5s 0.5s, box-shadow 0.5s 0;
}
input:checked + label:before {
  background: #61dc95;
}
input:checked + label:after {
  border-right-width: 34px;
  border-bottom-width: 34px;
  border-bottom-color: #902b20;
  -moz-transition: border 0.5s 0.5s;
  -o-transition: border 0.5s 0.5s;
  -webkit-transition: border 0.5s;
  -webkit-transition-delay: 0.5s;
  transition: border 0.5s 0.5s;
}
label:before {
  content: "";
  position: absolute;
  top: 12px;
  right: 12px;
  height: 12px;
  width: 12px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  background: #a33025;
  -moz-transition: background 0.5s;
  -o-transition: background 0.5s;
  -webkit-transition: background 0.5s;
  transition: background 0.5s;
}
label:after {
  content: "";
  position: absolute;
  bottom: 0px;
  left: 0px;
  height: 0;
  width: 0;
  border-bottom: 10px solid transparent;
  border-right: 10px solid transparent;
  -moz-transition: border 0.5s;
  -o-transition: border 0.5s;
  -webkit-transition: border 0.5s;
  transition: border 0.5s;
}
label:nth-child(2):after {
  display: none;
}

</style>
</head>

<body>
<div id="vcent">
  <h1>
    Select Your Study Level
  </h1>
  <div class="buttons">
    <input id="rock" name="flat" type="radio" onclick="location.href='courses.html'"/><label for="rock" >KIDS</label>
	<input id="paper" name="flat" type="radio"/><label for="paper"  onclick="location.href='courses.html'">SCOOL/COLLEGE</label>
	<input id="scissors" name="flat" type="radio"/><label for="scissors"  onclick="location.href='courses.html'">VARSITY</label>
  </div>
</div>
</body>

</html>