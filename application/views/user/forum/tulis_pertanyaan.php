
      <!-- CONTENT -->
      <div class="container text-center p-3 my-3 rounded bg-white shadow">
        <div class="row px-5">
          <div class="col-12">
            <h1>Tanyakan Sesuatu</h1>
          </div>
        </div>
        <div class="row my-2 px-5">
          <div class="col-12">
            <div class="container text-left">
              <form method="post" action="<?= base_url('forum/tulis'); ?>">
                <div class="form-group">
                  <label for="title"><b class="h4">Judul Pertanyaan</b></label>
                  <input class="form-control" type="text" name="judul_pertanyaan" id="title" placeholder="Judul Pertanyaan">
                </div>
                <div class="form-group">
                  <label for="Jelaskan"><b class="h4">Tulis Pertanyaan Disini</b></label>
                  <textarea class="form-control" rows="7" placeholder="Jelaskan Pertanyaan" name="pertanyaan"></textarea>
                </div>
                <!-- <span class="badge badge-dark mb-3">ATAU</span>
                 <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                  <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                  <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
                <div class="form-group">
                  <label for="tag"><b class="h4">Tags</b></label>
                  <input type="text" class="form-control" rows="10" placeholder="Tags: #SBMPTN #UTBK"></input>
                </div> -->
                <input type="submit" class="btn btn-primary" value="Posting Catatan" name="">
              </form>
            </div>
          </div>
        </div>
      </div>
