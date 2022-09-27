// DOM ハンバーガーメニュー関係
const hamburgerBtnWrapper = document.getElementById("ham");
const hamburgerBtn = document.getElementById("hamBtn");
const navUnit = document.getElementById("navUnit");
const closeSpMenu = document.getElementById("closeSpMenu");

// DOM 教材検索ダウンロードメニュー関係
const navMaterialDd = document.querySelector("#nav_material-dd");
const ddMenu = document.querySelector("#bl_ddMenu");

// DOM スマホ版　教材検索・ダウンロードメニュー関係
const globalNavNested = document.querySelector("#globalNavNested");
const globalNavArrow = document.querySelector("#globalNav_arrow");

// 関数　ハンバーガーメニュー関係
function none() {
  navUnit.style.display = "none";
}
function display() {
  navUnit.style.display = "flex";
}

// rotateAllow
function rotateAllow() {
  globalNavArrow.classList.toggle("rotate_arrow");
}

// ハンバーガーメニューのクローズ
function closeHamburger() {
  // ボタンの状態三本線に戻す
  hamburgerBtn.classList.remove("open");
  // ナビゲーションのユニットからnavOpenクラスを除去
  navUnit.classList.remove("navOpen");
  // ナビゲーションがアニメーションして消えてからdisplay:none;タイムアウトでタイミング調整
  // setTimeout(none, 800);
  // 教材検索ダウンロードのメニューが開いているときは閉じる。
  if ($("#globalNavNested").is(":visible")) {
    $("#globalNavNested").slideToggle("fast");
    rotateAllow();
  }
  setTimeout(none, 100);
}

function removeInlineStyle() {
  if (window.matchMedia("(min-width: 1280px)").matches) {
    if (navUnit.style.display) {
      navUnit.removeAttribute("style");
    }
    if (hamburgerBtn.classList.contains("open")) {
      hamburgerBtn.classList.remove("open");
    }
    if (globalNavNested.style.display) {
      globalNavNested.removeAttribute("style");
    }
    if (ddMenu.classList.contains("open")) {
      ddMenu.classList.remove("open");
    }
    if (globalNavArrow.classList.contains("rotate_arrow")) {
      globalNavArrow.classList.remove("rotate_arrow");
    }
    navMaterialDd.removeEventListener("click", rotateAllow);
  }
}

window.addEventListener("resize", removeInlineStyle);

//スマホ処理
$(function () {
  $("#nav_material-dd").on("click", function () {
    $("#globalNavNested").slideToggle("fast");
  });
});

function openHamburger() {
  display();

  navMaterialDd.addEventListener("click", rotateAllow);

  function fadeIn() {
    hamburgerBtn.classList.add("open");
    navUnit.classList.add("navOpen");
  }
  setTimeout(fadeIn, 100);
  // navUnit.classList.remove('navClose');
}

function handleHamburger() {
  if (hamburgerBtn.classList.contains("open")) {
    closeHamburger();
  } else {
    openHamburger();
  }
}

// 関数　教材検索・ダウンロードメニュー関係

function ddMenuBlock() {
  ddMenu.style.display = "block";
}
function ddMenuNone() {
  ddMenu.style.display = "none";
}

window.onload = function () {
  ddMenu.style.display = "block";
};

function ddMenuOpen() {
  // ddMenuBlock();
  ddMenu.classList.add("open");
  // setTimeout(function(){
  // 	ddMenu.classList.add("open");
  // },0);

  // $('.bl_ddMenu').slideDown();
}

function ddMenuClose() {
  ddMenu.classList.remove("open");
  // ddMenuNone();
  // setTimeout(ddMenuNone,100);
  // $('.bl_ddMenu').slideUp();
}

// 関数　スマホ版　教材検索・ダウンロードメニュー関係
function toggleNestedMenuSp() {
  globalNavNested.classList.toggle("open_nest");
}

// イベント設定　ハンバーガーメニュー関係
if (hamburgerBtnWrapper !== null) {
  hamburgerBtnWrapper.addEventListener("click", handleHamburger);
  closeSpMenu.addEventListener("click", closeHamburger);
}

// イベント設定　教材検索・ダウンロードメニュー関係
if (navMaterialDd !== null) {
  navMaterialDd.addEventListener("mouseenter", ddMenuOpen);
  navMaterialDd.addEventListener("mouseleave", ddMenuClose);
}
if (ddMenu !== null) {
  ddMenu.addEventListener("mouseleave", ddMenuClose);
  ddMenu.addEventListener("mouseover", ddMenuOpen);
}

// イベント設定　スマホ版　教材検索・ダウンロードメニュー関係
// navMaterialDd.addEventListener("click", toggleNestedMenuSp);

// if (window.matchMedia("(max-width: 1279px)").matches) {
//   //スマホ処理
//   $(function () {
//     $("#nav_material-dd").on("click", function () {
//       $("#globalNavNested").slideToggle("fast");
//     });
//   });
// 	navMaterialDd.addEventListener('click',()=>{
// 		globalNavArrow.classList.toggle('rotate_arrow')
// 	})
// }

// slick　メインビジュアル
$(".bl_mv_wrapper").slick({
  autoplay: true,
  // initialSlide: 2,
  dots: true,
  arrows: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: "linear",
});

//slick 私たちについて
$(".bl_mediaAbout_wrapper").slick({
  autoplay: true,
  // initialSlide: 2,
  dots: false,
  arrows: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: "linear",
});

// トップへ戻る
const navToTop = document.getElementById("nav-to-top");
if (document.querySelector(".ly_cont .el_navToTop")) {
  navToTop.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

// 会員登録画面プルダウンメニューテキスト色
function changeColor(elem) {
  if (elem.value == 0) {
    elem.style.color = "";
  } else {
    elem.style.color = "#000";
  }
}

// Q&Aアコーディオン
$(function () {
  $(".bl_FAQ_article_question").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("bl_FAQ_article_question_open");
  });
});

// lessons のタブナビゲーション

// document.addEventListener(
//   "DOMContentLoaded",
//   function () {
//     const tabNavItems = document.getElementsByClassName("bl_tabNav_item");

//     for (let i = 0; i < tabNavItems.length; i++) {
//       tabNavItems[i].addEventListener("click", tabSwitch, false);
//       console.log(tabNavItems);
//     }
//     function tabSwitch() {
//       document
//         .getElementsByClassName("current_tab")[0]
//         .classList.remove("current_tab");
//       this.classList.add("current_tab");

//       document
//         .getElementsByClassName("current_content")[0]
//         .classList.remove("current_content");
//       const arrayTabNavItems = Array.prototype.slice.call(tabNavItems);
//       const index = arrayTabNavItems.indexOf(this);

//       document
//         .getElementsByClassName("bl_card_unit")
//         [index].classList.add("current_content");
//     }
//   },
//   false
// );

// ラジオボタン＆チェックボックスでテキスト改行（管理画面で入力した<br>を文字列ではなく改行として出力）
$(".wpcf7-list-item-label").each(function () {
  var text = $(this).html();
  $(this).html(text.replace("&lt;br&gt;", "<br>"));
});

// スマホ横画面検知

// const lyHeroTop = document.getElementById("lyHeroTop");

// window.onload = function () {
//   // console.log("端末の向きが " + screen.orientation.angle + "になりました。");
//   if (
//     this.screen.orientation.angle == 90 ||
//     this.screen.orientation.angle == -90 ||
//     this.screen.orientation.angle == 270
//   ) {
//     if (!lyHeroTop.classList.contains("landscape"))
//       lyHeroTop.classList.add("landscape");
//     console.log(lyHeroTop);
//   } else {
//     if (lyHeroTop.classList.contains("landscape")) {
//       lyHeroTop.classList.remove("landscape");
//     }
//   }
// };

// window.onorientationchange = function () {
//   // console.log("端末の向きが " + screen.orientation.angle + "になりました。");
//   if (
//     this.screen.orientation.angle == 90 ||
//     this.screen.orientation.angle == -90 ||
//     this.screen.orientation.angle == 270
//   ) {
//     lyHeroTop.classList.add("landscape");
//   } else {
//     if (lyHeroTop.classList.contains("landscape")) {
//       lyHeroTop.classList.remove("landscape");
//     }
//   }
// };


// セレクトボックスに属性値追加
// const selectBox = document.querySelector('#history');
// console.log(selectBox);
// // selectBox.setAttribute('required');
// selectBox.required=true;

// const optionLabel = selectBox.firstElementChild
// console.log(optionLabel);
// optionLabel.disabled=true;
// optionLabel.selected=true;
