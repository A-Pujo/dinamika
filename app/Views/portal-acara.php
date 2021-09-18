    <?= view('__portal-header') ?>
        <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Acara Hari Ini</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Judul Acara</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Presensi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($acara as $a) : ?>
                                            <?php if(date('Y-m-d H:i:s') >= $a->opengate_acara and date('Y-m-d H:i:s') < $a->selesai_acara and in_array(user()->jenis, explode(',', $a->tujuan))) : ?>
                                            <tr>
                                                <td><?= $a->nama_acara ?></td>
                                                <td><?= $a->mulai_acara ?></td>
                                                <td><?= $a->selesai_acara ?></td>
                                                <td><a href="<?= base_url('portal/acara/'.$a->id_acara) ?>" class="btn btn-info btn-sm"><i class="fas fa-file-signature"></i></a></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rekap Presensimu</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Judul Acara</th>
                                            <th>Waktu Presensi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($presensi as $p) : ?>
                                            <tr>
                                                <td><?= $p->nama_acara ?></td>
                                                <td><?= $p->waktu_presensi ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?= view('__portal-footer') ?>

    <script>
        /*! Image Map Resizer (imageMapResizer.min.js ) - v1.0.10 - 2019-04-10
        *  Desc: Resize HTML imageMap to scaled image.
        *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
        *  License: MIT
        */

        !function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
        //# sourceMappingURL=imageMapResizer.map

        $('map').imageMapResize();

        $(document).ready(function(){
            $('#data-table').DataTable();
        });
    </script>
</body>
</html>