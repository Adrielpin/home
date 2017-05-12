var mbadd = new Object();

mbadd.assay_last_hash = false;
mbadd.sm = function() {
    
    if (statusUser<1) {
        loginNextAction = function() {  mbadd.sm(); };
        BellaClub.promptLogin(); 
        return;
    }
    
    var posMenu = $('div-mb-mshow').cumulativeOffset();
    var aFS = BellaAssay.current_hash.split('.');
    var foto_info = "a="+id_assay+"&f="+aFS[1]+"&s="+aFS[0];

    if (!$('div-mb-addmenu')) {         
        $('div-ups').insert({after: '<div id="div-mb-addmenu" class="pop-menu mPop" style="display:none"></div>'});
        $('div-mb-addmenu').setStyle({'top':(posMenu.top+38)+'px','left':posMenu.left+'px'});
    }
    
    document.body.style.cursor = 'wait';
    $('div-mb-addmenu').update();
    BellaClub.getURL('div-mb-addmenu', 'action=mb-addmenu&'+foto_info); 

    BellaClub.mttgl('div-mb-addmenu');
};
mbadd.na = function(elemb) { 
    if ($('input-mb-album-nome').present()) {
        $(elemb).disable();
        document.body.style.cursor = 'wait';
        BellaClub.getURL('div-mb-addmenu-js', 'action=mb-addna&'+$('form-mbadd').serialize());         
    } else { Effect.Pulsate('input-mb-album-nome',{pulses:2,duration:0.3}); }
};
mbadd.addfa = function(elemb) { 
    var isCk = false;
    $$('.album-list input').each(function(i){ if (i.checked) { isCk = true;  }});
    if (isCk) {
        $(elemb).disable();
        document.body.style.cursor = 'wait';
        BellaClub.getURL('div-mb-addmenu-js', 'action=mb-addfa&'+$('form-mbadd').serialize());         
    } else { Effect.Pulsate($$('.album-list input')[0],{pulses:2,duration:0.3}); }
};
mbadd.addmf = function() {
    document.body.style.cursor = 'wait';
    BellaClub.getURL('div-mb-addmenu-js', 'action=mb-addmf&'+$('form-mbadd').serialize());         
};
mbadd.addAlbumLI = function(jData) { 
   document.body.style.cursor = 'default';
   $$('ul.album-novo button')[0].enable();
   $('input-mb-album-nome').clear();
   $$('ul.album-list')[0].insert({top:'<li><label><input type="checkbox" name="albuns[]" value="'+jData.id+'" /> '+jData.label+'</label><li>'});
   Effect.Pulsate($$('ul.album-list li')[0],{pulses:4,duration:0.5});
};