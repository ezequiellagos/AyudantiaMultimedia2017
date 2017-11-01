package cl.upla.multimediatest;

import android.content.Context;
import android.webkit.JavascriptInterface;
import android.widget.Toast;

/**
 * Created by Ezequiel on 25-10-2017.
 */

public class WebAppInterface {
    Context mContext;

    WebAppInterface(Context c) {
        mContext = c;
    }

    @JavascriptInterface
    public void imprimeTexto(String texto){
        Toast.makeText(mContext, texto, Toast.LENGTH_SHORT).show();
    }
}
