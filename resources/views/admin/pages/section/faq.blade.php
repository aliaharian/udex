{{-- FAQ Repeater --}}
<div class="widget-block widget-item widget-style">
    <div class="heading-widget">
        <span class="widget-title">FAQ</span>
    </div>

    <div class="widget-content widget-content-padding widget-content-padding-side">
        <div class="form-group">
            <div class="faq text-field-repeater">
                <div class="field-list small-image row" id="faq_list">
                    @php $faq_count = 0; @endphp
                    @if(isset($Page->page_meta) && json_decode($Page->page_meta, true)['faq'])
                        @foreach(json_decode($Page->page_meta, true)['faq'] as $item)
                            <div class='text-field col-12' id='field-faq-{{ $faq_count += 1 }}'>
                                <div class='row align-items-center gy-4'>
                                    <div class='col-12'>
                                        <input value="{{ $item['question'] }}" placeholder='Question' class='input-field' type="text" name="faq[{{ $faq_count }}][question]" id="faq_question_{{ $faq_count }}">
                                    </div>
                                    <div class='col-12'>
                                        <textarea placeholder='Answer' class='input-field pt-3 pb-3' name="faq[{{ $faq_count }}][answer]" id="faq_answer_{{ $faq_count }}">{{ $item['answer'] }}</textarea>
                                        <span class='delete-row icon-close' onclick='delete_faq({{ $faq_count }})'><img src='{{ asset('public/assets/admin/img/base/icons') }}/close.svg'></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="add-field center" id="addFAQ">
                    <span class="icon-plus"></span>
                    Add Item
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Add Meet The FAQ --}}
<script>
    jQuery(document).ready(function () {
        var i = {{ $faq_count }};
        jQuery("#addFAQ").click(function () {
            i += 1;
            jQuery("#faq_list").append("<div class='text-field col-12' id='field-faq-" + i + "'><div class='row align-items-center gy-4'><div class='col-12'><input placeholder='Question...' class='input-field' type=\"text\" name=\"faq[" + i + "][question]\" id=\"faq\"></div><div class='col-12'><textarea placeholder='Answer' class='input-field pt-3 pb-3' name=\"faq[" + i + "][answer]\" id=\"faq\"></textarea> <span class='delete-row icon-close' onclick='delete_faq(" + i + ")'><img src='{{ asset('public/assets/admin/img/base/icons') }}/close.svg'></span></div></div>");
            return false;
        });
    });

    function delete_team($id) {
        $('#field-faq-' + $id).remove();
    }
</script>
