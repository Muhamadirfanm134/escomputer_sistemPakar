<div class="section section-features">
    <div class="container">

        <div class="row">
            <h4 class="header-text ">Pilih Gejala</h4>
            <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
                <div class="boxes mb-10">
                    <table>
                        <?php foreach ($gejala as $g) : ?>
                        <tr>
                            <td>
                                <input type="checkbox" id="<?= $g['id_gejala']; ?>" name="id_gejala[]"
                                    value="<?= $g['id_gejala']; ?>">
                            </td>
                            <td colspan="2">
                                <?= $g['kode_gejala']; ?> | Apakah <?= $g['nama_gejala']; ?> ?
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div style="margin-top: 30px;">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>