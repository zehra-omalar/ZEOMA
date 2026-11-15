<?php
$site = "ZEOMA";
$slogan = "Soft Powder Pink Luxe";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?php echo $site; ?> | <?php echo $slogan; ?></title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
:root{--bg:#faf7f9;--card:#fff;--fg:#2c2529;--muted:#777;--border:#f3e6ed;--rose:#8b5a6c;--pink:#c9779b;--pinklight:#fdf0f5;--peach:#f2c2a9;--cream:#f9f2eb;box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px)}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){--bg:#171316;--card:#241d21;--fg:#f4ecef;--muted:#b3a6ab;--border:#3a2f35;--rose:#d79ab4;--pink:#e3a5c0;--pinklight:#2e2429;--peach:#5a4046;--cream:#2b2226}}
:root[data-theme="dark"]{--bg:#171316;--card:#241d21;--fg:#f4ecef;--muted:#b3a6ab;--border:#3a2f35;--rose:#d79ab4;--pink:#e3a5c0;--pinklight:#2e2429;--peach:#5a4046;--cream:#2b2226}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
*{box-sizing:border-box;margin:0;padding:0;font-family:'Montserrat',system-ui,sans-serif}
body{background:var(--bg);color:var(--fg);padding-bottom:80px}
.top{background:linear-gradient(90deg,#8b5a6c,#c9779b,#8b5a6c);color:#fff;text-align:center;padding:7px;font-size:.75rem;font-weight:700}
.ship{background:#2c2529;color:#f9f2eb;text-align:center;padding:6px;font-size:.7rem;font-weight:600}
header{background:var(--card);border-bottom:2px solid var(--border);position:sticky;top:env(safe-area-inset-top,0px);z-index:50}
.hin{max-width:1400px;margin:0 auto;padding:10px 16px;display:flex;align-items:center;gap:14px;flex-wrap:wrap;justify-content:space-between}
.logo{font-weight:800;font-size:1.5rem;letter-spacing:2px;color:var(--fg);text-decoration:none}.logo b{color:var(--rose)}
.logo small{display:block;font-size:.6rem;letter-spacing:.5px;color:var(--muted);text-transform:uppercase}
.search{flex:1;min-width:180px;max-width:460px}
.search input{width:100%;padding:10px 16px;border-radius:20px;border:1.5px solid var(--peach);background:var(--cream);color:var(--fg);font-size:.85rem;outline:none}
.acts{display:flex;gap:14px;align-items:center;font-size:1.2rem}
.ic{position:relative;cursor:pointer;background:none;border:none;color:var(--fg);font-size:1.2rem}
.bd{position:absolute;top:-6px;right:-8px;background:var(--rose);color:var(--bg);font-size:.6rem;font-weight:800;padding:2px 5px;border-radius:50%}
.cats{display:flex;gap:18px;overflow-x:auto;padding:8px 16px;max-width:1400px;margin:0 auto;font-size:.78rem;font-weight:700;white-space:nowrap}
.cats span{cursor:pointer;color:var(--muted)}.cats span:hover,.cats span.on{color:var(--rose)}
.timer{max-width:1400px;margin:16px auto;padding:0 16px}
.timer div{background:#2c2529;color:#f9f2eb;padding:12px 20px;border-radius:12px;display:flex;justify-content:space-between;align-items:center;gap:10px;font-weight:700;font-size:.82rem;flex-wrap:wrap}
.timer b{background:#8b5a6c;padding:5px 12px;border-radius:6px;letter-spacing:2px}
.wrap{max-width:1400px;margin:0 auto;padding:0 16px}
.bar{display:flex;justify-content:space-between;align-items:center;background:var(--card);padding:10px 16px;border-radius:8px;border:1px solid var(--border);margin-bottom:14px;gap:10px;flex-wrap:wrap;font-weight:800;font-size:.9rem}
select{padding:6px;border-radius:6px;border:1px solid var(--peach);background:var(--card);color:var(--fg);font-size:.75rem}
.grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(190px,1fr));gap:16px}
.pc{background:var(--card);border:1px solid var(--border);border-radius:10px;overflow:hidden;cursor:pointer;transition:.2s;display:flex;flex-direction:column}
.pc:hover{transform:translateY(-3px);border-color:var(--rose)}
.im{height:260px;overflow:hidden;display:flex;align-items:center;justify-content:center;font-size:3.6rem;position:relative}
.tag{position:absolute;top:8px;left:8px;background:var(--rose);color:var(--bg);font-size:.6rem;font-weight:800;padding:3px 7px;border-radius:4px}
.fav{position:absolute;top:8px;right:8px;background:var(--card);border:none;width:28px;height:28px;border-radius:50%;cursor:pointer;font-size:.85rem}
.bd2{padding:12px;display:flex;flex-direction:column;gap:5px;flex:1}
.br{font-size:.68rem;font-weight:800;color:var(--rose);text-transform:uppercase}
.tt{font-size:.82rem;font-weight:600}
.pr{display:flex;gap:8px;align-items:baseline}.pr b{font-size:.98rem}.pr s{font-size:.75rem;color:var(--muted)}
.row{display:flex;justify-content:space-between;align-items:center;margin-top:auto;gap:6px}
.st{font-size:.65rem;font-weight:700;padding:2px 6px;border-radius:4px}
.ok{color:#059669;background:rgba(5,150,105,.14)}.lo{color:#d97706;background:rgba(217,119,6,.15)}.no{color:#dc2626;background:rgba(220,38,38,.14)}
.btn{background:var(--rose);color:var(--bg);border:none;padding:7px 11px;border-radius:6px;font-size:.72rem;font-weight:700;cursor:pointer}
.pg{display:flex;justify-content:center;gap:6px;margin:24px 0;flex-wrap:wrap}
.pg button{padding:7px 12px;border:1px solid var(--peach);background:var(--card);color:var(--fg);border-radius:6px;cursor:pointer;font-weight:700;font-size:.78rem}
.pg button.on{background:var(--rose);color:var(--bg)}
.wa{position:fixed;bottom:calc(80px + env(safe-area-inset-bottom,0px));right:16px;background:#25d366;color:#fff;width:48px;height:48px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.4rem;text-decoration:none;z-index:60}
.wheel{position:fixed;bottom:calc(80px + env(safe-area-inset-bottom,0px));left:16px;background:linear-gradient(135deg,#e11d48,#8b5a6c);color:#fff;padding:11px 16px;border-radius:30px;font-weight:800;font-size:.78rem;cursor:pointer;z-index:60;border:none}
.mbg{position:fixed;inset:0;background:rgba(20,15,18,.6);display:none;align-items:center;justify-content:center;z-index:200;padding:14px}
.modal{background:var(--card);border-radius:12px;max-width:760px;width:100%;max-height:88vh;overflow:auto;padding:24px;position:relative;display:flex;gap:20px;flex-wrap:wrap}
.x{position:absolute;top:10px;right:16px;font-size:1.5rem;cursor:pointer;background:none;border:none;color:var(--fg)}
.drawer{position:fixed;top:0;right:-420px;width:min(390px,100%);height:100%;background:var(--card);border-left:1px solid var(--border);z-index:150;transition:.3s;padding:calc(20px + env(safe-area-inset-top,0px)) 20px 20px;display:flex;flex-direction:column}
.drawer.open{right:0}.dc{flex:1;overflow-y:auto;margin:14px 0}
.item{display:flex;justify-content:space-between;align-items:center;background:var(--pinklight);padding:10px;border-radius:6px;margin-bottom:8px;font-size:.76rem}
.dd{position:relative}.dm{position:absolute;right:0;top:120%;width:220px;background:var(--card);border:1px solid var(--border);border-radius:12px;box-shadow:0 10px 25px rgba(0,0,0,.2);display:none;flex-direction:column;z-index:100;overflow:hidden}
.dd:hover .dm,.dm.show{display:flex}
.dm .h{background:var(--pinklight);padding:10px 14px;font-weight:700;font-size:.75rem;color:var(--rose)}
.dm .g{padding:12px 14px;display:flex;flex-direction:column;gap:6px;border-bottom:1px solid var(--border)}
.dm a{padding:7px 16px;font-size:.78rem;font-weight:600;color:var(--fg);text-decoration:none;cursor:pointer}.dm a:hover{background:var(--pinklight);color:var(--rose)}
.bn{position:fixed;bottom:0;left:0;right:0;background:var(--card);border-top:1px solid var(--border);display:flex;justify-content:space-around;padding:8px 0 calc(8px + env(safe-area-inset-bottom,0px));z-index:100}
.bn div{display:flex;flex-direction:column;align-items:center;font-size:.68rem;font-weight:700;cursor:pointer;gap:2px}.bn i{font-style:normal;font-size:1.2rem}
input.f{width:100%;padding:10px;margin-bottom:10px;border-radius:6px;border:1px solid var(--peach);background:var(--bg);color:var(--fg)}

/* ===== MODERN KATMAN ===== */
:root{--r:18px;--sh:0 6px 24px rgba(139,90,108,.10);--sh2:0 14px 36px rgba(139,90,108,.20)}
:root[data-theme="dark"]{--sh:0 6px 24px rgba(0,0,0,.35);--sh2:0 14px 36px rgba(0,0,0,.55)}
body{background:radial-gradient(1200px 500px at 85% -10%,var(--pinklight),transparent 60%),var(--bg);transition:background .3s,color .3s}
.top{background:linear-gradient(90deg,#8b5a6c,#c9779b,#e7a3a0,#c9779b,#8b5a6c);background-size:200% 100%;animation:mv 8s linear infinite;letter-spacing:.3px}
@keyframes mv{to{background-position:200% 0}}
.ship{background:transparent;color:var(--muted);border-bottom:1px solid var(--border)}
header{background:color-mix(in srgb,var(--card) 82%,transparent);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);border-bottom:1px solid var(--border)}
.logo{font-size:1.6rem;letter-spacing:3px}
.search input{border:1.5px solid var(--border);background:var(--card);border-radius:999px;padding:11px 20px;box-shadow:var(--sh);transition:.2s}
.search input:focus{border-color:var(--pink);box-shadow:0 0 0 4px color-mix(in srgb,var(--pink) 22%,transparent)}
.ic{width:40px;height:40px;border-radius:50%;background:var(--card);border:1px solid var(--border);box-shadow:var(--sh);display:inline-flex;align-items:center;justify-content:center;transition:.2s}
.ic:hover{transform:translateY(-2px);border-color:var(--pink)}
.bd{top:-4px;right:-4px;min-width:18px;text-align:center;background:linear-gradient(135deg,var(--pink),var(--rose));color:#fff}
.cats{gap:8px;padding:10px 16px 12px}
.cats span{padding:8px 16px;border-radius:999px;background:var(--card);border:1px solid var(--border);transition:.2s}
.cats span.on{background:linear-gradient(135deg,var(--rose),var(--pink));color:#fff;border-color:transparent;box-shadow:var(--sh)}
.cats span:hover:not(.on){border-color:var(--pink)}
.hero{max-width:1400px;margin:18px auto 0;padding:0 16px}
.hero>div{position:relative;overflow:hidden;border-radius:26px;padding:34px 36px;background:linear-gradient(120deg,#8b5a6c 0%,#c9779b 55%,#f2c2a9 120%);color:#fff;display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap;box-shadow:var(--sh2)}
.hero>div:before{content:"";position:absolute;right:-60px;top:-80px;width:280px;height:280px;border-radius:50%;background:rgba(255,255,255,.14)}
.hero>div:after{content:"";position:absolute;right:140px;bottom:-110px;width:220px;height:220px;border-radius:50%;background:rgba(255,255,255,.10)}
.hero h1{font-size:clamp(1.3rem,3.4vw,2.3rem);font-weight:800;line-height:1.15;position:relative;z-index:1}
.hero p{font-size:.85rem;opacity:.92;margin-top:8px;position:relative;z-index:1}
.hero .cta{position:relative;z-index:1;background:#fff;color:var(--rose);border:none;padding:13px 26px;border-radius:999px;font-weight:800;font-size:.85rem;cursor:pointer;box-shadow:0 8px 22px rgba(0,0,0,.18);transition:.2s}
.hero .cta:hover{transform:translateY(-2px) scale(1.03)}
.timer div{border-radius:16px;background:linear-gradient(90deg,#2c2529,#4a3640)}
.bar{border-radius:var(--r);box-shadow:var(--sh);border:1px solid var(--border);padding:12px 16px}
.bar .ctl{display:flex;gap:10px;align-items:center;flex-wrap:wrap}
select{padding:8px 12px;border-radius:999px;border:1px solid var(--border);cursor:pointer}
.vw{display:flex;gap:4px;background:var(--pinklight);padding:4px;border-radius:999px}
.vw button{border:none;background:transparent;color:var(--muted);width:34px;height:30px;border-radius:999px;cursor:pointer;font-size:.95rem;transition:.2s}
.vw button.on{background:var(--card);color:var(--rose);box-shadow:var(--sh)}
.mix{border:1px solid var(--border);background:var(--card);color:var(--fg);padding:8px 14px;border-radius:999px;font-weight:700;font-size:.74rem;cursor:pointer;transition:.2s}
.mix:hover{border-color:var(--pink);color:var(--rose)}
.pc{border-radius:var(--r);box-shadow:var(--sh);border:1px solid var(--border);transition:transform .25s,box-shadow .25s,border-color .25s}
.pc:hover{transform:translateY(-6px);box-shadow:var(--sh2);border-color:var(--pink)}
.im img{transition:transform .6s}.pc:hover .im img{transform:scale(1.07)}
.tag{border-radius:999px;padding:4px 10px;background:linear-gradient(135deg,var(--pink),var(--rose));color:#fff}
.fav{width:34px;height:34px;box-shadow:var(--sh);transition:.2s;color:var(--rose)}.fav:hover{transform:scale(1.15)}
.kt{position:absolute;left:8px;bottom:8px;background:color-mix(in srgb,var(--card) 88%,transparent);backdrop-filter:blur(6px);color:var(--fg);font-size:.6rem;font-weight:800;padding:3px 9px;border-radius:999px}
.btn{border-radius:999px;background:linear-gradient(135deg,var(--rose),var(--pink));color:#fff;padding:8px 14px;transition:.2s}
.btn:hover{filter:brightness(1.08);transform:translateY(-1px)}
.pg button{border-radius:50%;width:38px;height:38px;padding:0;border:1px solid var(--border)}
.pg button.on{background:linear-gradient(135deg,var(--rose),var(--pink));color:#fff;border-color:transparent}
.bn{left:12px;right:12px;bottom:calc(10px + env(safe-area-inset-bottom,0px));border-radius:22px;border:1px solid var(--border);box-shadow:var(--sh2);padding:8px 0;background:color-mix(in srgb,var(--card) 88%,transparent);backdrop-filter:blur(14px)}
.wa,.wheel{bottom:calc(92px + env(safe-area-inset-bottom,0px))}
.modal{border-radius:24px}.drawer{border-radius:24px 0 0 24px}
.item{border-radius:14px}
/* ===== GORUNUMLER ===== */
.grid.v-grid{grid-template-columns:repeat(auto-fill,minmax(190px,1fr))}
.grid.v-big{grid-template-columns:repeat(auto-fill,minmax(320px,1fr));gap:22px}
.grid.v-big .im{height:430px}.grid.v-big .tt{font-size:.95rem}.grid.v-big .pr b{font-size:1.15rem}
.grid.v-list{grid-template-columns:1fr;gap:14px}
.grid.v-list .pc{flex-direction:row;align-items:stretch}
.grid.v-list .im{width:200px;min-width:200px;height:auto;min-height:210px}
.grid.v-list .bd2{padding:18px 20px;justify-content:center}
.grid.v-list .tt{font-size:1rem}.grid.v-list .row{margin-top:8px;justify-content:flex-start;gap:14px}
.grid.v-mas{display:block;column-count:4;column-gap:16px}
.grid.v-mas .pc{break-inside:avoid;margin-bottom:16px;display:flex}
.grid.v-mas .pc:nth-child(3n+1) .im{height:340px}.grid.v-mas .pc:nth-child(3n+2) .im{height:250px}.grid.v-mas .pc:nth-child(3n) .im{height:300px}
@media(max-width:1100px){.grid.v-mas{column-count:3}}
@media(max-width:760px){.grid.v-mas{column-count:2;column-gap:10px}.grid.v-big{grid-template-columns:1fr}.grid.v-big .im{height:380px}
.grid.v-list .im{width:120px;min-width:120px;min-height:150px}.grid.v-list .bd2{padding:10px 12px}.hero>div{padding:22px}.im{height:220px}}
</style>
</head>
<body>
<div class="top">✨ ZEOMA MEGA İNDİRİM YAĞMURU! 2100+ Üründe Fırsatlar Başladı! ✨</div>
<div class="ship">🚚 1.000 ₺ ve üzeri alışverişlerde ÜCRETSİZ KARGO · <a href="#" style="color:inherit" onclick="kargo();return false">📦 Kargo Takip</a></div>
<header>
<div class="hin">
<a class="logo" href="#"><b>ZE</b>OMA<small>Soft Powder Pink Luxe</small></a>
<div class="search"><input id="q" placeholder="2100+ ürün içinden arama yapın…" oninput="search()"></div>
<div class="acts">
<button class="ic" id="thm" title="Koyu / Açık tema" onclick="toggleTheme()">🌙</button>
<button class="ic" onclick="drawer('fav')">♡<span class="bd" id="fc">0</span></button>
<button class="ic" onclick="drawer('cart')">🛍<span class="bd" id="cc">0</span></button>
<div class="dd"><button class="ic" onclick="document.getElementById('dm').classList.toggle('show')">👤</button>
<div class="dm" id="dm"><div class="h">📦 Kargo Bedava</div>
<div class="g"><button class="btn" onclick="login('Giriş Yap')">Giriş Yap</button><button class="btn" style="background:var(--cream);color:var(--fg)" onclick="login('Üye Ol')">Üye Ol</button></div>
<a onclick="alert('Siparişleriniz listeleniyor.')">Siparişlerim</a><a onclick="drawer('acc')">Kullanıcı Bilgilerim</a><a onclick="drawer('fav')">Beğendiklerim</a><a onclick="alert('Aktif kuponunuz: ZEOMA50')">Kuponlarım</a></div></div>
</div></div>
<div class="cats" id="cats"></div>
</header>
<div class="hero"><div><div style="position:relative;z-index:1"><h1>Yeni Sezon,<br>Pudra Pembe Lüks ✨</h1><p>Moda, parfüm, kozmetik, elektronik ve daha fazlası — hepsi tek yerde, karışık keşfet.</p></div><button class="cta" onclick="document.getElementById('grid').scrollIntoView({behavior:'smooth'})">Alışverişe Başla →</button></div></div>
<div class="timer"><div>⚡ DEV KATALOG İNDİRİM SAYACI: Ekstra %40 İndirim! <b id="tm">05 : 20 : 15</b></div></div>
<div class="wrap">
<div class="bar"><span id="title"></span><div class="ctl"><button class="mix" onclick="reshuffle()">🔀 Karıştır</button><div class="vw" id="vw"><button data-v="grid" title="Izgara" onclick="setV('grid')">▦</button><button data-v="big" title="Büyük kartlar" onclick="setV('big')">◫</button><button data-v="list" title="Liste" onclick="setV('list')">☰</button><button data-v="mas" title="Mozaik" onclick="setV('mas')">▥</button></div><select id="sort" onchange="applyAll()"><option value="m">🔀 Karışık</option><option value="d">Önerilen Sıralama</option><option value="l">En Düşük Fiyat</option><option value="h">En Yüksek Fiyat</option></select></div></div>
<div class="grid v-grid" id="grid"></div>
<div class="pg" id="pg"></div>
</div>
<a class="wa" href="https://wa.me/905554443322" target="_blank" title="WhatsApp Destek">💬</a>
<button class="wheel" onclick="show('wh')">🎁 Şans Çarkını Çevir!</button>

<div class="mbg" id="pm"><div class="modal"><button class="x" onclick="hide('pm')">×</button>
<div id="pmi" style="width:280px;height:340px;overflow:hidden;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:6rem"></div>
<div style="flex:1;min-width:220px"><div class="br" id="pmb"></div><h2 id="pmt" style="font-size:1.1rem;margin:5px 0"></h2><div id="pmp" style="font-size:1.25rem;font-weight:800;margin-bottom:10px"></div><p id="pmd" style="font-size:.8rem;color:var(--muted);margin-bottom:12px"></p>
<div style="font-size:.78rem;font-weight:700;margin-bottom:6px">Beden Seçenekleri:</div><div id="pms" style="display:flex;gap:6px;margin-bottom:12px;flex-wrap:wrap"></div>
<h4 style="font-size:.85rem;color:var(--rose);margin-bottom:6px">Değerlendirmeler</h4><div id="pmr" style="font-size:.75rem;background:var(--pinklight);padding:8px;border-radius:6px;margin-bottom:12px"></div>
<button class="btn" style="width:100%;padding:12px" id="pma">Sepete Ekle</button></div></div></div>

<div class="mbg" id="lg"><div class="modal" style="max-width:380px;flex-direction:column"><button class="x" onclick="hide('lg')">×</button><h3 id="lgt" style="color:var(--rose)"></h3><input class="f" placeholder="Adınız Soyadınız"><input class="f" placeholder="E-posta"><input class="f" type="password" placeholder="Şifre"><button class="btn" style="padding:12px" onclick="hide('lg');alert('Demo giriş yapıldı.')">İşlemi Tamamla</button></div></div>

<div class="mbg" id="wh"><div class="modal" style="max-width:400px;flex-direction:column;text-align:center;align-items:center"><button class="x" onclick="hide('wh')">×</button><h3 style="color:var(--rose)">🎉 Şans Çarkı</h3>
<div id="wg" style="width:150px;height:150px;border-radius:50%;border:8px solid var(--rose);background:conic-gradient(#f8d7e3 0 90deg,#f2c2a9 90deg 180deg,#8b5a6c 180deg 270deg,#f9f2eb 270deg 360deg);display:flex;align-items:center;justify-content:center;font-weight:800;color:#2c2529;transition:3s transform ease-out">ZEOMA</div>
<button class="btn" style="background:#e11d48;color:#fff;padding:12px 26px;border-radius:20px" onclick="spin()">Çarkı Çevir!</button></div></div>

<div class="drawer" id="fav"><div style="display:flex;justify-content:space-between;font-weight:800;color:var(--rose)"><span>♥ Favorilerim</span><button class="x" style="position:static" onclick="drawer('fav')">×</button></div><div class="dc" id="fvc"></div></div>
<div class="drawer" id="cart"><div style="display:flex;justify-content:space-between;font-weight:800;color:var(--rose)"><span>🛍 Sepetim</span><button class="x" style="position:static" onclick="drawer('cart')">×</button></div><div class="dc" id="ctc"></div>
<div style="display:flex;justify-content:space-between;font-weight:800;margin-bottom:10px"><span>Toplam:</span><span id="tot">0,00 ₺</span></div><button class="btn" style="padding:11px" onclick="alert('Sipariş tamamlandı!')">Alışverişi Tamamla</button></div>
<div class="drawer" id="acc"><div style="display:flex;justify-content:space-between;font-weight:800;color:var(--rose)"><span>👤 Hesabım</span><button class="x" style="position:static" onclick="drawer('acc')">×</button></div>
<div class="dc"><div class="item" style="gap:14px;justify-content:flex-start"><div style="width:52px;height:52px;border-radius:50%;background:var(--rose);color:var(--bg);display:flex;align-items:center;justify-content:center;font-weight:800">ZO</div><div><b>Zehra Omalar</b><br>zehraomalar@gmail.com<br><span style="color:var(--rose);font-weight:700">Öğrenci No: 254309040</span></div></div></div></div>

<nav class="bn"><div onclick="scrollTo(0,0)"><i>🏠</i>Ana Sayfa</div><div onclick="drawer('fav')"><i>♡</i>Favorilerim</div><div onclick="cat('parfum')"><i>🌸</i>Parfüm</div><div onclick="drawer('cart')"><i>🛍</i>Sepetim</div><div onclick="drawer('acc')"><i>👤</i>Hesabım</div></nav>

<script>
const C={kadin:["Kadın Trend","👗",["ZEOMA Luxe","STRADIVARIUS","MANGO","ZARA","PULL&BEAR"],"#f8d7e3"],erkek:["Erkek Sokak","👕",["ZEOMA Street","JACK & JONES","MAVI","LC WAIKIKI","DEFFACTO"],"#d9e3f0"],parfum:["Parfüm","🌸",["LUMENA Scent","BARGELLO","AVON","CALVIN KLEIN","TOM FORD"],"#f2d9f0"],kozmetik:["Kozmetik","💄",["EMBEAUTY","MAYBELLINE","L’OREAL PARIS","VULLY","FLORMAR"],"#fbd5d5"],elektronik:["Elektronik","🎧",["SAMSUNG","XIAOMI","APPLE","LENOVO","HUAWEI"],"#dde3ea"],ev_tekstil:["Ev & Yaşam","🛋",["ZEOMA Home","KARACA","MADAME COCO","ENGLISH HOME","TAÇ"],"#f9ead7"],aksesuar:["Aksesuar","⌚",["NIKE","ADIDAS","DANIEL WELLINGTON","ZEOMA Gold","PUMA"],"#f5e6c8"]};
const IM=["img/kadin-1.jpg", "img/kadin-2.jpg", "img/kadin-3.jpg", "img/kadin-4.jpg", "img/kadin-5.jpg", "img/kadin-6.jpg", "img/kadin-7.jpg"];const KN=["Çikolata Kahve Palto & Deri Mini Etek Kombini", "Siyah Tüvit Ceket & Pileli Mini Etek Takım", "Ekose Midi Etek & Balıkçı Yaka Kazak Kombini", "Bebek Mavisi Hırka & Çiçekli Şifon Etek Set", "Bordo Saç Örgü Kazak & Ekru Pileli Pantolon", "Krem Polo Örgü Kazak & Gömlek Kombini", "Kahve Örgü Süveter, Gömlek & Pileli Pantolon"];
const IE=["img/erkek-1.jpg", "img/erkek-2.jpg", "img/erkek-3.jpg", "img/erkek-4.jpg", "img/erkek-5.jpg", "img/erkek-6.jpg", "img/erkek-7.jpg", "img/erkek-8.jpg"];const EN=["Houndstooth Kareli Bomber Ceket & Çizgili Gömlek Kombini", "Antik Kahve Deri Ceket & Bol Paça Pantolon Kombini", "Krem Fermuarlı Ceket & Siyah Bol Paça Pantolon", "Taba Süet Bomber Ceket & Siyah Balıkçı Yaka Kombini", "Bordo Polo Yaka Sweatshirt & Pileli Bej Pantolon", "Bordo Çizgili Oversize Gömlek & Bej Bol Pantolon", "Lacivert Beyaz Çizgili Yarım Fermuarlı Triko & Eşofman", "Bordo Sweatshirt, Beyaz Gömlek & Baggy Jean Kombini"];
const IP=["img/parfum-1.jpg", "img/parfum-2.jpg", "img/parfum-3.jpg", "img/parfum-4.jpg", "img/parfum-5.jpg"];const PN=["Kehribar Rengi Siyah Kapaklı Eau de Parfum – Altın Detaylı", "Pembe Kurdeleli Çiçeksi Eau de Parfum – Şakayık Esintili", "Fiyonklu Pembe Çiçek Buketi Eau de Parfum", "Pudra Pembe Kurdeleli Lüks Eau de Parfum – İnci Detaylı", "Pembe Kristal Kapaklı Eau de Parfum – Rose Gold Detaylı"];
const IK=["img/kozmetik-1.jpg", "img/kozmetik-2.jpg", "img/kozmetik-3.jpg", "img/kozmetik-4.jpg", "img/kozmetik-5.jpg"];const KZ=["Pembe Allık, Aydınlatıcı & Dudak Parlatıcı Makyaj Seti", "Pembe Likit Allık, Kompakt Allık & Ruj Seti", "Işıltılı Far Paleti, Allık & Dudak Bakım Balmı Seti", "Kapitone Kapaklı Allık, Likit Allık & Ruj Koleksiyonu", "Pembe Tonlar Makyaj & Cilt Bakım Koleksiyonu"];
let s=7;const r=()=>(s=(s*16807)%2147483647)/2147483647,ri=(a,b)=>a+Math.floor(r()*(b-a+1));
const ELN=["Taşınabilir Mini Projeksiyon Cihazı – Uzaktan Kumandalı", "RGB Aydınlatmalı Mekanik Klavye – Çevirme Düğmeli", "Kablosuz Bluetooth Kulaklık – Şarj Kutulu", "Akıllı Saat – Silikon Kordon, Nabız Takibi", "Dizüstü Bilgisayar Şeffaf Koruyucu Kılıf", "Hızlı Şarj Adaptörü & USB Kablo Seti", "Saç Şekillendirici & Fön Seti – Pembe Kutulu", "Akıllı Saat – Pudra Silikon Kordon, Kutulu", "Kompakt Dijital Fotoğraf Makinesi – Askılı"],EVN=["Çift Kapılı Akıllı Ekranlı No-Frost Buzdolabı", "Duvar Tipi Inverter Klima", "Hava Temizleme Cihazı – HEPA Filtreli", "Akıllı Robot Süpürge – Otomatik Boşaltma İstasyonlu", "Buhar Kazanlı Ütü – Yüksek Basınçlı"],AKN=["Altın Renk Dikdörtgen Kadranlı Çelik Kordon Kadın Kol Saati", "Lacivert Yonca Detaylı Gümüş Bileklik & Yüzük Seti", "Bordo Kadranlı Çelik Kordon Kol Saati – Tarih Göstergeli", "Desenli Deri Erkek Cüzdan – Hediye Kutulu", "Lacivert Deri Fermuarlı Erkek El Çantası – Bilek Askılı", "Siyah Dokulu Deri Erkek Cüzdan – Kutulu", "Siyah Deri Kemer – Metal V Tokalı", "Nakışlı Pamuklu Şapka Seti – Siyah & Beyaz", "Siyah Kedi Gözü Güneş Gözlüğü – Altın Detaylı"];
const IEL=["img/elektronik-1.jpg", "img/elektronik-2.jpg", "img/elektronik-3.jpg", "img/elektronik-4.jpg", "img/elektronik-5.jpg", "img/elektronik-6.jpg", "img/elektronik-7.jpg", "img/elektronik-8.jpg", "img/elektronik-9.jpg"];
const IEV=["img/ev-1.jpg", "img/ev-2.jpg", "img/ev-3.jpg", "img/ev-4.jpg", "img/ev-5.jpg"];
const IA=["img/aksesuar-1.jpg", "img/aksesuar-2.jpg", "img/aksesuar-3.jpg", "img/aksesuar-4.jpg", "img/aksesuar-5.jpg", "img/aksesuar-6.jpg", "img/aksesuar-7.jpg", "img/aksesuar-8.jpg", "img/aksesuar-9.jpg"];
const BR={elektronik:"ZEOMA Tech",ev_tekstil:"ZEOMA Home",aksesuar:"ZEOMA Gold"};
const P=[];let id=101;
for(const k in C){const c=C[k];for(let i=1;i<=310;i++){const f=ri(120,11500)+.99;P.push({id:id++,k,m:BR[k]||c[2][ri(0,4)],n:k=="kadin"?KN[(i-1)%7]+" – Model "+i:k=="erkek"?EN[(i-1)%8]+" – Model "+i:k=="parfum"?PN[(i-1)%5]+" – Model "+i:k=="kozmetik"?KZ[(i-1)%5]+" – Model "+i:k=="elektronik"?ELN[(i-1)%ELN.length]+" – Model "+i:k=="ev_tekstil"?EVN[(i-1)%EVN.length]+" – Model "+i:AKN[(i-1)%AKN.length]+" – Model "+i,img:k=="kadin"?IM[(i-1)%7]:k=="erkek"?IE[(i-1)%8]:k=="parfum"?IP[(i-1)%5]:k=="kozmetik"?IK[(i-1)%5]:k=="elektronik"?IEL[(i-1)%IEL.length]:k=="ev_tekstil"?IEV[(i-1)%IEV.length]:IA[(i-1)%IA.length],f,o:f+ri(200,3000),st:ri(0,40),new:i%2==0,fl:i%4==0,low:i%6==0})}}
P.forEach(p=>p.sh=Math.random());
let view="grid";try{view=localStorage.getItem("zv")||"grid"}catch(e){}
let list=P.slice(),pg=1,cur="hepsi",cart=[],favs=[];const PER=30;
const fmt=n=>n.toLocaleString('tr-TR',{minimumFractionDigits:2})+" ₺";
const $=i=>document.getElementById(i);
$('cats').innerHTML='<span class="on" data-k="hepsi" onclick="cat(\'hepsi\')">Tüm Ürünler ('+P.length+')</span>'+Object.keys(C).map(k=>("<span data-k=\""+(k)+"\" onclick=\"cat('"+(k)+"')\">"+(C[k][0])+" (310)</span>")).join('');
function stock(n){return n<=0?'<span class="st no">Tükendi</span>':n<=3?("<span class=\"st lo\">Son "+(n)+" Stok!</span>"):("<span class=\"st ok\">Stokta ("+(n)+")</span>")}
function applyAll(){const q=$('q').value.toLowerCase().trim();list=P.filter(p=>(cur=="hepsi"||p.k==cur)&&(p.n+" "+p.m).toLowerCase().includes(q));const v=$('sort').value;if(v=="m")list.sort((a,b)=>a.sh-b.sh);if(v=="l")list.sort((a,b)=>a.f-b.f);if(v=="h")list.sort((a,b)=>b.f-a.f);pg=1;render()}
function cat(k){cur=k;$('q').value="";document.querySelectorAll('#cats span').forEach(e=>e.classList.toggle('on',e.dataset.k==k));applyAll();scrollTo({top:0,behavior:'smooth'})}
function search(){applyAll()}
function setV(v){view=v;try{localStorage.setItem("zv",v)}catch(e){}render()}
function reshuffle(){P.forEach(p=>p.sh=Math.random());$('sort').value="m";applyAll()}
function toggleTheme(){const d=document.documentElement.getAttribute("data-theme")=="dark"?"light":"dark";document.documentElement.setAttribute("data-theme",d);try{localStorage.setItem("zt",d)}catch(e){}$('thm').textContent=d=="dark"?"☀️":"🌙"}
(function(){let t="light";try{t=localStorage.getItem("zt")||"light"}catch(e){}document.documentElement.setAttribute("data-theme",t);$('thm').textContent=t=="dark"?"☀️":"🌙"})();
function render(){$('grid').className="grid v-"+view;document.querySelectorAll('#vw button').forEach(b=>b.classList.toggle('on',b.dataset.v==view));$('title').textContent="Görüntülenen Ürünler ("+list.length+")";
$('grid').innerHTML=list.slice((pg-1)*PER,pg*PER).map(p=>("<div class=\"pc\" onclick=\"openP("+(p.id)+")\"><div class=\"im\" style=\"background:"+(C[p.k][3])+"\">"+(p.img?("<img src=\""+(p.img)+"\" alt=\"\" style=\"width:100%;height:100%;object-fit:cover;object-position:"+(["kadin","erkek"].includes(p.k)?'top':'center')+"\">"):C[p.k][1])+(p.fl?'<span class="tag">İNDİRİM</span>':p.new?'<span class="tag" style="background:#2c2529;color:#fff">YENİ</span>':'')+"<span class=\"kt\">"+(C[p.k][0])+"</span><button class=\"fav\" onclick=\"event.stopPropagation();fav("+(p.id)+")\">"+(favs.includes(p.id)?'♥':'♡')+"</button></div><div class=\"bd2\"><div class=\"br\">"+(p.m)+"</div><div class=\"tt\">"+(p.n)+"</div><div class=\"pr\"><b>"+(fmt(p.f))+"</b><s>"+(fmt(p.o))+"</s></div>"+(p.low?'<div style="font-size:.65rem;color:var(--rose);font-weight:700">↓ Son 10 günün en düşük fiyatı</div>':'')+"<div class=\"row\">"+(stock(p.st))+"<button class=\"btn\" onclick=\"event.stopPropagation();add("+(p.id)+")\">Sepete Ekle</button></div></div></div>")).join('');
const t=Math.ceil(list.length/PER);let h='';for(let i=1;i<=Math.min(t,15);i++)h+=("<button class=\""+(i==pg?'on':'')+"\" onclick=\"pg="+(i)+";render();scrollTo(0,300)\">"+(i)+"</button>");$('pg').innerHTML=t>1?h:''}
const find=i=>P.find(p=>p.id==i);
function add(i){const p=find(i);if(p.st<=0){alert("Bu ürün tükendi.");return}cart.push(p);ui()}
function fav(i){favs=favs.includes(i)?favs.filter(x=>x!=i):[...favs,i];ui();render()}
function ui(){$('cc').textContent=cart.length;$('fc').textContent=favs.length;
$('ctc').innerHTML=cart.length?cart.map((p,x)=>("<div class=\"item\"><div><b>"+(p.n)+"</b><br><span style=\"color:var(--rose);font-weight:800\">"+(fmt(p.f))+"</span></div><button class=\"ic\" style=\"font-size:1rem\" onclick=\"cart.splice("+(x)+",1);ui()\">🗑</button></div>")).join(''):'<p style="text-align:center;color:var(--muted);font-size:.8rem;margin-top:40px">Sepetiniz henüz boş.</p>';
$('tot').textContent=fmt(cart.reduce((a,p)=>a+p.f,0));
$('fvc').innerHTML=favs.length?favs.map(i=>("<div class=\"item\">❤️ "+(find(i).n)+"</div>")).join(''):'<p style="text-align:center;color:var(--muted);font-size:.8rem;margin-top:40px">Favorileriniz henüz boş.</p>'}
const RV=[["Berna Demir","08 Kas 2026","Ürün son derece kaliteli ve şık."],["Mert Aksoy","07 Kas 2026","Kargo hızlı, paketleme kusursuz."]];
function openP(i){const p=find(i);$('pmi').style.background=C[p.k][3];$('pmi').innerHTML=p.img?("<img src=\""+(p.img)+"\" alt=\"\" style=\"width:100%;height:100%;object-fit:cover;object-position:"+(["kadin","erkek"].includes(p.k)?'top':'center')+"\">"):C[p.k][1];$('pmb').textContent=p.m;$('pmt').textContent=p.n;$('pmp').textContent=fmt(p.f);
$('pmd').textContent="ZEOMA güvencesiyle tasarlanan, "+C[p.k][0].toLowerCase()+" kategorisinin en popüler ve yüksek kaliteli ürünü.";
$('pms').innerHTML=(p.k=="kadin"||p.k=="erkek"?["S","M","L","XL"]:["Standart"]).map(b=>("<span style=\"border:1.5px solid var(--peach);padding:6px 12px;border-radius:6px;font-size:.75rem;font-weight:700;background:var(--cream)\">"+(b)+"</span>")).join('');
$('pmr').innerHTML=RV.map(v=>("<div style=\"margin-bottom:6px\"><b style=\"color:var(--rose)\">"+(v[0])+"</b> <small>("+(v[1])+")</small><br>"+(v[2])+"</div>")).join('');
$('pma').onclick=()=>{add(i);hide('pm')};show('pm')}
function show(i){$(i).style.display='flex'}function hide(i){$(i).style.display='none'}
function drawer(i){$(i).classList.toggle('open')}
function login(t){$('lgt').textContent="ZEOMA’ya "+t;show('lg')}
function spin(){$('wg').style.transform=("rotate("+(1440+Math.floor(Math.random()*360))+"deg)");setTimeout(()=>{alert("🎉 Tebrikler! %30 indirim kuponu kazandınız! Kod: ZEOMA30");hide('wh')},3200)}
function kargo(){const n=prompt("Kargo takip numaranız:","ZEM-2026-9040");if(n)alert("📦 Kargonuz yolda! Tahmini teslimat: yarın 14:00’e kadar.")}
let T=5*3600+20*60+15;const D=T;setInterval(()=>{const h=Math.floor(T/3600),m=Math.floor(T%3600/60),x=T%60,z=n=>String(n).padStart(2,'0');$('tm').textContent=((z(h))+" : "+(z(m))+" : "+(z(x)));if(--T<0)T=D},1000);
$('sort').value='m';ui();applyAll();
</script>
</body>
</html>
