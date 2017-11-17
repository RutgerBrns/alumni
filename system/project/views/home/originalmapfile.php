<div class="row row-centered">
    <div class="col-md-12">
        <div class="" style="width: 20%; margin-left: auto; margin-right: auto;">
            <select id="country_select" class="form-group form-control" style="font-size: 0.9rem;">
                <option value="">select a country</option>
                    <?php foreach ($countries as $country): ?>
                        <option value="<?php echo $country->ISO_code; ?>"><?php echo $country->name; ?></option>
                    <?php endforeach;?>
            </select>
        </div>

        <div class="col-md-12">
            <div id="map" class="map" style="width: 90%; height: 900px; margin-left: auto; margin-right: auto;">
            </div>
        </div>

           <div id="region_data" style="display: none">
        <div class="content">
        </div>
        <div class="text-center">
            <button class="btn btn-default close">Close</button>
        </div>
    </div>

    </div>
</div>

    <script>
        var SLM = null;
        $(function () {
            SLM = new bootcamp_map('<?php echo url::to('ajax/country_data'); ?>');
            SLM.init({
                'country_data': {'<?php echo join("': '1', '", $country_codes); ?>': '1'}
            });
            $('#flags_view .country').click(function (ev) {
                ev.stopPropagation();
                ev.preventDefault();
                SLM.selectRegion($(this).data('code'));
            });
        });


        $("#map_xs").click(function(){
            $("#map_xs").hide();
        });

    </script>



