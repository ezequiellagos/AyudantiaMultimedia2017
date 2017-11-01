package cl.upla.multimediatest;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity{

    private WebView webView;
    private WebSettings webSettings;
    private String url;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //url = "file:///android_asset/index.html";
        url = "http://www.upla.cl/portada/";

        webView = (WebView) findViewById(R.id.contenedorWeb);
        webSettings = webView.getSettings();

        webView.addJavascriptInterface(new WebAppInterface(this), "Android");
        webView.setWebChromeClient(new WebChromeClient());
        webView.setWebViewClient(new WebViewClient());

        webSettings.setJavaScriptEnabled(true);

        webView.loadUrl(url);

    }

}
