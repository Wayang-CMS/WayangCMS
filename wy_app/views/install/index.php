<?php $router = WY_Registry::get('router'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">WayangCMS Installation Step License Agreement</h3>
    </div>
    <div class="panel-body">
        <form role="form" method="POST" action="<?php echo $router->generate('install-step', array('id'=>1));?>" enctype="multipart/form-data" >
            <fieldset>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="chat-panel panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-list fa-fw"></i>
                                Pejanjian Lisensi WayangCMS
                            </div>
                            <div class="panel-body">
                                <p class="chat">
                                <center>Mohon dibaca dan dipahami dengan sebaik-baiknya</center>
                                </p>
                                <br/>
                                <p class="chat" style="text-align: justify">
                                    Wayang CMS adalah salah satu CMS yang bersifat opensource yang diperuntukkan untuk penggunakan khalayak umum. Lisensi yang digunakan oleh Wayang CMS adalah <a href="http://opensource.org/licenses/MIT">Lisensi MIT.</a> Segala bentuk legalitas dan aturan mengenai penggunakan resource Wayang CMS sesuai dengan <a href="http://opensource.org/licenses/MIT">Lisensi MIT.</a> Untuk lebih jelas silahkan dibaca <a href="http://opensource.org/licenses/MIT">Lisesnsi MIT </a>berikut:  
                                </p>
                                <br/>
                                <p class="chat" style="text-align: justify">
                                    Lisensi MIT (MIT License)

                                    Copyright (c) <year> <copyright holders>

                                    Dengan ini diberikan izin, bebas biaya, kepada siapa saja yang memperoleh salinan
                                    software ini dan file dokumentasi terkait ( "Perangkat Lunak"), untuk menangani
                                    di Software tanpa pembatasan, termasuk tanpa batasan hak
                                    untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan / atau menjual
                                    salinan Perangkat Lunak, dan untuk mengizinkan orang yang diberi Perangkat Lunak ini
                                    dilengkapi untuk melakukannya, tunduk pada kondisi berikut:

                                    Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus dimasukkan dalam
                                    semua salinan atau bagian substansial dari Perangkat Lunak.

                                    PERANGKAT LUNAK INI DISEDIAKAN "APA ADANYA", TANPA JAMINAN APAPUN, EXPRESS OR
                                    TERSIRAT, TERMASUK NAMUN TIDAK TERBATAS PADA JAMINAN DIPERDAGANGKAN,
                                    KESESUAIAN UNTUK TUJUAN TERTENTU DAN PELANGGARAN. DALAM KEADAAN THE
                                    PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
                                    KEWAJIBAN, BAIK DALAM TINDAKAN KONTRAK, KESALAHAN ATAU LAINNYA, YANG MUNCUL DARI,
                                    ATAU BERHUBUNGAN DENGAN PERANGKAT LUNAK ATAU PENGGUNAAN ATAU MASALAH LAINNYA DI
                                    PERANGKAT LUNAK.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox col-md-12">
                        <label>
                            <input name="agree" type="checkbox" value="agree" required="required">Saya telah membaca dan Setuju dengan perjanjian lisensi
                        </label>
                    </div>
                </div>
                
                <!-- Change this to a button or input when using this as a form -->
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-md btn-primary btn-block">Saya Setuju</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
