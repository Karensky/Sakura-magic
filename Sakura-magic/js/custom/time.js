<span id="runtime_span"></span>

<script type="text/javascript">function show_runtime() {
        window.setTimeout("show_runtime()", 1000);
        X = new Date("10/11/2017 7:00:00");
        Y = new Date();
        T = (Y.getTime() - X.getTime());
        M = 24 * 60 * 60 * 1000;
        a = T / M;
        A = Math.floor(a);
        b = (a - A) * 24;
        B = Math.floor(b);
        c = (b - B) * 60;
        C = Math.floor((b - B) * 60);
        D = Math.floor((c - C) * 60);
        document.getElementById("runtime_span").innerHTML = "网站在各种灾难中运行了: " + A + "天" + B + "小时" + C + "分" + D + "秒"
    }
    show_runtime();</script>
