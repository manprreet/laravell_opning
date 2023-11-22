<div class="tab-pane fade cmsPagesdutch" id="cmsPagesdutch-tab-pane" role="tabpanel" aria-labelledby="cmsPagesdutch-tab" tabindex="0">
  <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
            <h3 class="text-custom-muted mb-0 tab-title"></h3>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" id="btnradio1" autocomplete="off" checked onchange="changeContent('privacy-nl');" />
                <label class="btn btn-sm btn-outline-custom-yellow text-muted-default" for="btnradio3">Privacy Policy</label>

                <input type="radio" class="btn-check" id="btnradio2" autocomplete="off" onchange="changeContent('terms-nl');" />
                <label class="btn btn-sm btn-outline-custom-yellow text-muted-default" for="btnradio4">Terms & Condition</label>
            </div>
        </div>

        <div class="custom-editor-box" id="privacy_box_nl" style="display: block;">
            <textarea id="privacy-nl">
            {{ $privacy_policy_nl }}
            </textarea>
        </div>
        <div class="custom-editor-box" id="terms_box_nl" style="display: none;">
            <textarea id="terms-nl">
            {{ $terms_nl }}
            </textarea>
        </div>
    </div>

    <input type="hidden" name="type" id="type" value="privacy">

    <div class="card-footer bg-white border-0">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <a class="btn btn-custom-yellow btn-default" onclick="saveContent('nl');">
                    <span class="align-middle">Save</span>
                </a>
            </div>
        </div>
    </div>
</div>