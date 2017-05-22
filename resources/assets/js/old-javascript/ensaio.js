function alertMan(){
    alert('Desculpe estamos em manutenção, voltaremos com o serviço em breve ;)');
    // alert(location.hash);
}

var id_assay = 0;
var BellaAssay = new Object();
BellaAssay.HashInterval = false;
BellaAssay.old_hash = "";
BellaAssay.current_hash = "";
BellaAssay.TimeStampSlideShow = false;
BellaAssay.SlideShowControl = false;
BellaAssay.zoomActivated = false;
BellaAssay.SlideShowInteval = 6000;
BellaAssay.loadErrorCount = 0;

BellaAssay.Foto = function(id_assay, newHash) {
   if ($('div-assay-js')) {

      var aFS = newHash.split('.');

      /* pre check img  url */
      var validHashImgRef = false;
      try {
         validHashImgRef = $('li-f-' + aFS[0] + '-' + aFS[1]);
     } catch (e) {}

     if (validHashImgRef) {

         var url_ = $A(validHashImgRef.classNames())[0];
         var url2_ = $A(validHashImgRef.classNames())[1];

         if (url_) {

            BellaAssay.magicHistoryStop();

            if (BellaAssay.zoomActivated && !url2_) {
               BellaAssay.FotoLoadError('imgFE_' + aFS[0] + '_' + aFS[1], 'nce');
               return;
           }

           BellaAssay.FotoLoad(aFS[0], aFS[1], url_, url2_);
           if (BellaAssay.zoomActivated === false) {
               GetBannerTop(2);
           }

           BellaClub.getURL('div-assay-js', 'action=assay&id=' + id_assay + '&ca=fotos');
           /*urchinTracker(model_tracker+'/foto-'+newHash);*/
           return;
       }

       var sGetFoto = '_nfs=1&_dbc=1&content=assay&id=' + id_assay + '&foto=' + newHash;
       if (BellaAssay.loadErrorCount > 3) {
        sGetFoto = sGetFoto + '&forceCS=1';
        BellaAssay.loadErrorCount = 0;
    }
    BellaClub.getURL('div-assay-js', sGetFoto);

} else {
 history.back();
}
} else {
  window.setTimeout("BellaAssay.Foto(" + id_assay + ",'" + newHash + "');", 1000);
}
};

BellaAssay.FotoLoadError = function(img_error_id, nce) {
   $$('#div-assay-datagallery ul.isSec li').each(function(e_) {
      $(e_).className = '';
  });
   try {
      $(img_error_id).remove();
  } catch (e) {}
  if (nce !== 'nce') {
      BellaAssay.loadErrorCount++;
  }
  BellaAssay.Foto(id_assay, BellaAssay.current_hash);
};

BellaAssay.HideFotos = function(secao_, foto_) {
   $$('#div-assay-fotos-content img').each(function(img_) {
      if (img_.id !== 'imgFE_' + secao_ + '_' + foto_) {
         $(img_).hide();
     }
 });
};

BellaAssay.PassaFoto = function(ord_, no_effect_move) {

   var nextfoto = 1;
   var nexsecao = 1;
   var totalfsc = 0;
   var totalsc = 0;
   var foto_corrente = BellaAssay.current_hash.split('.')[1];
   var secao_corrente = BellaAssay.current_hash.split('.')[0];
   var sHash = false;

   if (secao_corrente == '' || foto_corrente == '') {
      sHash = "1.2";
  }

  if (!sHash) {
      $A($$('#div-secao-thumbs-' + secao_corrente + ' li')).each(function() {
         totalfsc++;
     });
      $A($$('#div-assay-datagallery ul.isSec')).each(function() {
         totalsc++;
     });

      if (ord_ == "-") {
         if (foto_corrente > 1) {
            nextfoto = foto_corrente - 1;
            sHash = secao_corrente + "." + nextfoto;
        } else {
            if (secao_corrente > 1) {
               nexsecao = parseInt(secao_corrente) - 1;
               totalfsc = 0;
               $A($$('#div-secao-thumbs-' + nexsecao + ' li')).each(function() {
                  totalfsc++;
              });
               sHash = nexsecao + "." + totalfsc;
           }
       }
   } else {
     if (foto_corrente < totalfsc) {
        nextfoto = parseInt(foto_corrente) + 1;
        nexsecao = secao_corrente;
        sHash = secao_corrente + "." + nextfoto;
    } else {
        if (secao_corrente < totalsc) {
           nexsecao = parseInt(secao_corrente) + 1;
           sHash = nexsecao + ".1";
       } else {
           sHash = "1.1";
       }
   }
}
}

if (sHash) {
  location.hash = sHash;
}
};

BellaAssay.FotoLoad = function(secao_, foto_, urlImg, urlImgHD) {
   var srcImg = urlImg;
   if ($('imgFE_' + secao_ + '_' + foto_)) {
      $('imgFE_' + secao_ + '_' + foto_).remove();
  }
  if (BellaAssay.zoomActivated && urlImgHD) {
      srcImg = urlImgHD;
  }

  $('div-assay-fotos-content').addClassName('loading');
  $('div-loading-mobile').show();

  $('div-assay-fotos-content').insert({
      bottom: '<img id="imgFE_' + secao_ + '_' + foto_ + '" style="display:none" src="' + srcImg + '" onload="BellaAssay.fotoShow(' + secao_ + ',' + foto_ + ',this.id)" onerror="BellaAssay.FotoLoadError(this.id)" ondblclick="BellaAssay.zoomStart()" class="' + urlImg + ' ' + urlImgHD + '" />'
  });
};

BellaAssay.SlideShow = function(booStart) {
   try {
      clearTimeout(BellaAssay.TimeStampSlideShow);
  } catch (e) {}
  if (booStart == 1) {
      BellaAssay.SlideShowControl = true;
      BellaAssay.TimeStampSlideShow = window.setTimeout("BellaAssay.PassaFoto('+');", 3000);
      return;
  } else if (booStart == 0) {
      BellaAssay.SlideShowControl = false;
      if (BellaAssay.TimeStampSlideShow) {
         window.clearTimeout(BellaAssay.TimeStampSlideShow);
     }
     return;
 } else if (BellaAssay.SlideShowControl) {
  BellaAssay.TimeStampSlideShow = window.setTimeout("BellaAssay.PassaFoto('+');", BellaAssay.SlideShowInteval);
}
};

BellaAssay.SlideDo = function() {
   if (BellaAssay.SlideShowControl) {
      BellaAssay.SlideShow(0);
  } else {
      BellaAssay.SlideShow(1);
  }
  $$('span.slideshow').invoke("toggleClassName", 'slideshow-0');
  $$('span.slideshow').invoke("toggleClassName", 'slideshow-1');
};

BellaAssay.SlideSlow = function() {
   BellaAssay.SlideShowInteval = (BellaAssay.SlideShowInteval < 8000 ? BellaAssay.SlideShowInteval + 2000 : 8000);
   BellaAssay.SlideShow(1);
};

BellaAssay.SlideFast = function() {
   BellaAssay.SlideShowInteval = (BellaAssay.SlideShowInteval > 2000 ? BellaAssay.SlideShowInteval - 2000 : 2000);
   BellaAssay.SlideShow(1);
};

BellaAssay._bind_nav_keys = function() {
   $(document).observe('keydown', function(e) {
      switch (e.keyCode) {
         case Event.KEY_LEFT:
         BellaAssay.PassaFoto('-');
         break;
         case Event.KEY_RIGHT:
         BellaAssay.PassaFoto('+');
         break;
         case Event.KEY_ESC:
         if (BellaAssay.zoomActivated) {
           BellaAssay.zoomClose();
       }
       break;
   }
});
};

BellaAssay.fotoShow = function(secao_, foto_, sImg) {

   BellaAssay.HideFotos(secao_, foto_);
   BellaAssay.FixNav(secao_, foto_);

   $('div-assay-fotos-content').removeClassName('loading');
   $('div-loading-mobile').hide();

   $(sImg).setStyle({
      display: 'none',
      'height': 'auto',
      'width': 'auto'
  });
   var imgDim_ = $(sImg).getDimensions();

   /* se zoom ou mobile ou ( w>h e tablet)  = img w 100% */
   if (BellaAssay.zoomActivated || $('div-assay-fotos-content').getWidth() === 610 ||
      (imgDim_.width > imgDim_.height && $('div-assay-fotos-content').getWidth() === 920)
      ) {
      $(sImg).setStyle({
         'width': '100%'
     });
}

if (BellaAssay.zoomActivated) {
  $('a-mais-zoom').addClassName('hide');
  $('a-menos-zoom').addClassName('hide');
  if (imgDim_.width > $('div-assay-fotos-content').getWidth()) {
     $('a-mais-zoom').removeClassName('hide');
 }
}

imgDim_ = $(sImg).getDimensions();
$('div-assay-fotos-content').setStyle({
  'min-height': imgDim_.height + 'px'
});

$(sImg).setStyle({
  'left': parseInt(($('div-assay-fotos-content').getWidth() - $(sImg).getWidth()) / 2) + 'px'
});

new Effect.Appear(sImg, {
  duration: 0.3
});

BellaAssay.magicHistoryStart();
BellaAssay.SlideShow();
};
BellaAssay.zoomIn = function() {
   var aFS = BellaAssay.current_hash.split('.');
   var validHashImgRef = false;
   try {
      validHashImgRef = $('imgFE_' + aFS[0] + '_' + aFS[1]);
  } catch (e) {}
  if (validHashImgRef) {
      $(validHashImgRef).setStyle({
         'width': 'auto'
     });
      $('a-mais-zoom').addClassName('hide');
      $('a-menos-zoom').removeClassName('hide');
  }
};
BellaAssay.zoomOut = function() {
   var aFS = BellaAssay.current_hash.split('.');
   var validHashImgRef = false;
   try {
      validHashImgRef = $('imgFE_' + aFS[0] + '_' + aFS[1]);
  } catch (e) {}
  if (validHashImgRef) {
      $(validHashImgRef).setStyle({
         'width': '100%'
     });
      $('a-menos-zoom').addClassName('hide');
      $('a-mais-zoom').removeClassName('hide');
  }
};

BellaAssay.FixNav = function(secao_, foto_) {
   $$('#div-assay-datagallery a.on').each(function(elem_) {
      $(elem_).removeClassName('on');
  });
   $$('#div-assay-datagallery ul.isSec').each(function(elem_) {
      $(elem_).hide();
  });
   $('div-secao-thumbs-' + secao_).show();
   $('a-secao-' + secao_).addClassName('on');
   $('a-thumb-' + secao_ + '-' + foto_).addClassName('on');
   if ($('div-assay-datagallery').getStyle('position') == "absolute") {
      BellaClub.mhide();
  }
};

BellaAssay.zoomStart = function() {
   if (statusUser < 1) {
      BellaClub.getURL('div-assay-js', 'action=assay&id=' + id_assay + '&ls-zoom=1');
      BellaClub.promptLogin();
      return;
  }
  BellaAssay.zoomActivated = true;
  $('div-assay-fotos-content').addClassName('zoom');
  BellaAssay.Foto(id_assay, BellaAssay.current_hash);
};
BellaAssay.zoomClose = function() {
   BellaAssay.zoomActivated = false;
   $('div-assay-fotos-content').removeClassName('zoom');
   BellaAssay.Foto(id_assay, BellaAssay.current_hash);
};

BellaAssay.showSecoes = function() {
   if ($('div-assay-fotos-content').getWidth() > 610) {
      $('div-assay-datagallery').setStyle({
         'left': $A($$('div.icoSecoes'))[0].cumulativeOffset().left + 'px'
     });
  }
  BellaClub.mttgl('div-assay-datagallery');
};

BellaAssay.showSecoesMais = function() {
   var iTop = 0;
   if (!$('a-secoes-mais').hasClassName('icoSM')) {
      iTop = ($$('.nav-secoes-n ul')[0].getHeight() - parseFloat($$('.nav-secoes-n')[0].getStyle('maxHeight'))) * -1;
  }
  $$('.nav-secoes-n ul')[0].setStyle({
      top: iTop + 'px'
  });
  $('a-secoes-mais').toggleClassName('icoSM');
};

_copyHeaderFotosSecoes = function(lap_) {
   lap_++;
   if (lap_ > 10) {
      return;
  }
  try {
      var tmpHtml = $('div-header-fotos').innerHTML;
      $('div-header-fotos').remove();
      $('div-model-header-fotos').update(tmpHtml);
  } catch (e) {
      window.setTimeout(_copyHeaderFotosSecoes, 200, lap_);
  }
};

BellaAssay.toggleParts = function(obj) {
   $$('.nav-secoes-n ul:not(.partB)').each(function(ul_) {
      if ($(obj).next('ul') == ul_) {
         $(ul_).removeClassName('hide');
         location.href = $(obj).next('ul').down('a').readAttribute('href');
     } else {
         $(ul_).addClassName('hide');
     }
 });
};
__payWallX = function() {
   BellaClub.hideAlphaBox();
   $('div-box-paywall').remove();
};
__payWallRemove = function() {
   try {
      __payWallNextAction();
  } catch (e) {}
  BellaClub.hideAlphaBox();
  $('div-box-paywall').remove();
};
__promptPayWall = function() {
   if (!$('div-box-paywall')) {
      $('div-ups').insert({
         after: '<div id="div-box-paywall"></div>'
     });
  }
  BellaClub.getURL('div-box-paywall', 'action=lrs-paywall');
};
__payWallNextAction = function() {
   BellaAssay.old_hash = '';
   BellaAssay.magicHistoryUpdater();
};
loginNextAction = function() {
   BellaAssay.old_hash = '';
   BellaAssay.magicHistoryUpdater();
};

_copyHeaderFotosSecoes();

window.setTimeout(BellaAssay._bind_nav_keys, 1000);
window.setTimeout(BellaAssay.magicHistoryStart, 400);

BellaClub.magicHistoryUpdater = function() {
   return;
};