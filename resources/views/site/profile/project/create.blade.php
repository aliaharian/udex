@extends('layouts.profile.master')

@section('page-title', 'Create Projects')

@section('heading-lib')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@endsection

@section('content')
    <article class="content-inner">
        {!! Form::open(['id'=>'ajaxform', 'enctype' => 'multipart/form-data']) !!}
        <div class="row project-page">
            <div class="col-md-3 col-12">
                <div class="sidebar-form">
                    <div class="page-image text-center text-md-start">
                        <img src="{{ asset('public/assets/site/images/base/dashboard/projects-image.svg') }}" alt="About your property">
                    </div>
                    <div class="page-title text-center text-md-start">About your property</div>
                    <div class="page-desc text-center text-md-start">We need to confirm a few details about the property you’re looking for us to work on, to help us build a full picture of the make-up of your existing space.</div>

                    <div class="tab-nav">
                        <ul class="nav" id="ProjectTab" role="tablist">
                            <li role="presentation">
                                <div class="item-btn active" id="tab-1" data-bs-toggle="tab" data-bs-target="#content-1" role="tab" aria-controls="tab-1" aria-selected="true">
                                    <div class="title">About your property</div>
                                    <div class="desc">
                                        <span class="value-checked"></span>
                                        of 5 questions answered
                                    </div>
                                </div>
                            </li>
                            <li role="presentation">
                                <div class="item-btn" id="tab-2" data-bs-toggle="tab" data-bs-target="#content-2" role="tab" aria-controls="tab-2" aria-selected="false">
                                    <div class="title">Getting to know you</div>
                                    <div class="desc">
                                        <span class="value-checked"></span>
                                        of 6 questions answered
                                    </div>
                                </div>
                            </li>
                            <li role="presentation">
                                <div class="item-btn" id="tab-3" data-bs-toggle="tab" data-bs-target="#content-3" role="tab" aria-controls="tab-3" aria-selected="false">
                                    <div class="title">Ideas & inspiration</div>
                                    <div class="desc">
                                        <span class="value-checked"></span>
                                        of 3 questions answered
                                    </div>
                                </div>
                            </li>
                            <li role="presentation">
                                <div class="item-btn" id="tab-4" data-bs-toggle="tab" data-bs-target="#content-4" role="tab" aria-controls="tab-4" aria-selected="false">
                                    <div class="title">Timeframes & budget</div>
                                    <div class="desc">
                                        <span class="value-checked"></span>
                                        of 7 questions answered
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="tab-content" id="ProjectTabContent">
                    @include('site.profile.project.sections.tab-1')
                    @include('site.profile.project.sections.tab-2')
                    @include('site.profile.project.sections.tab-3')
                    @include('site.profile.project.sections.tab-4')
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </article>

    {{-- Show Notification --}}
    <div class="notifications">
        <div class="show-message"></div>
        <div class="other-message"></div>
    </div>

    <script>
        $(document).ready(function (e) {
            let Notifications = $('.notifications');
            let Message = $('.notifications .show-message');

            function showNotification() {
                Notifications.addClass('show');
                setTimeout(function () {
                    Notifications.removeClass('show');
                }, 2000);
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#ajaxform').submit(function (e) {
                e.preventDefault();
                let formData = new FormData(this);
                let inputs = $(this).find("input, select, button, textarea");

                inputs.prop("disabled", true);
                $.ajax({
                    type: 'POST',
                    url: "{{ url('profile/project/store') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        showNotification();
                        Message.addClass(response.status);
                        Message.text(response.message);
                        inputs.prop("disabled", false);
                        // if (response.file) {
                        //     Notifications.find('.other-message').html('<div class="show-message success">' + response.file + '</div>');
                        // }
                    },
                    error: function (response) {
                        showNotification();
                        Message.addClass('danger');
                        Message.text('A problem has occurred.');
                        inputs.prop("disabled", false);
                    }
                });
            });
        });
    </script>

    {{-- Check Section --}}
    <script>
        function CheckTab() {
            for (let $TabID = 1; $TabID <= 4; $TabID++) {
                const Tab = '#tab-' + $TabID;
                const Tab_Count = $('#accordion-' + $TabID).find('.checkbox-style').length;
                const Tab_Count_Checked = $('#accordion-' + $TabID).find('.checkbox-style.checked').length;

                $(Tab).find('.value-checked').text(Tab_Count_Checked);
                if (Tab_Count == Tab_Count_Checked) {
                    $(Tab).addClass('task-complete');
                } else {
                    $(Tab).removeClass('task-complete');
                }
            }
        }

        CheckTab();

        function TextInput(element) {
            $(element).parent().parent().parent().parent().find('.required-field').each(function () {
                if (!$(this).val()) {
                    setTimeout(function () {
                        $(element).parent().parent().parent().parent().parent().parent().find('.checkbox-style').removeClass('checked');
                    }, 10);
                } else {
                    $(element).parent().parent().parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
                }
            });
            setTimeout(function () {
                CheckTab();
            }, 11);
        }

        function CheckBox(element) {
            $(element).parent().parent().parent().parent().parent().find('.required-field').each(function () {
                if ($(this).is(':checked')) {
                    setTimeout(function () {
                        $(element).parent().parent().parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
                    }, 10);
                } else {
                    $(element).parent().parent().parent().parent().parent().parent().find('.checkbox-style').removeClass('checked');
                }
            });
            setTimeout(function () {
                CheckTab();
            }, 11);
        }

        function QuantityField(element, clicked = 0) {
            $(element).parent().parent().parent().parent().parent().parent().parent().find('.required-field').each(function () {
                if (!$(this).val()) {
                    setTimeout(function () {
                        if (clicked == 1) {
                            $(element).parent().parent().parent().parent().parent().parent().parent().parent().find('.checkbox-style').removeClass('checked');
                        } else {
                            $(element).parent().parent().parent().parent().parent().parent().parent().find('.checkbox-style').removeClass('checked');
                        }
                    }, 10);
                } else {
                    if (clicked == 1) {
                        $(element).parent().parent().parent().parent().parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
                    } else {
                        $(element).parent().parent().parent().parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
                    }
                }
            });
            setTimeout(function () {
                CheckTab();
            }, 11);
        }

        function FileField(element) {
            $(element).parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
        }

        function SelectField(element) {
            $(element).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().find('.checkbox-style').addClass('checked');
            setTimeout(function () {
                CheckTab();
            }, 11);
        }
    </script>

    {{-- Check Box Required --}}
    <script type="text/javascript">
        function RequiredCheckbox(element) {
            var checkboxes = $(element).parent().parent().parent().parent().find('input');

            if ($(element).parent().parent().parent().parent().find('input:checked').length > 0) {
                checkboxes.removeAttr('required');
            } else {
                checkboxes.attr('required', 'required');
            }
        }

        @if(isset($CurrentProject))
        RequiredCheckbox('.required-field');
        @endif
    </script>

    {{-- Number btn --}}
    <script>
        $('.btn-plus, .btn-minus').on('click', function (e) {
            const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
            const input = $(e.target).closest('.field-item').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
            QuantityField(this, clicked = 1)
        })
    </script>

    {{-- Select Input --}}
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function (e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            SelectField(this);
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function (e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }

        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    </script>
@endsection
