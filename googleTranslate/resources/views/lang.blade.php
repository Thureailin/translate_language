<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Google Translate Package Example - NiceSnippets.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="card mt-5 border-0">
        <div class="card-header">
            <h1 class="font-weight-bolder text-center">My Application Which are Changing Languages for all Citizen in all Over the World  🌎 </h1>
        </div>
        <div class="card-body bg-warning">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-2 ">
                    <strong>Select Language: </strong>
                </div>
                <div class="col-md-4 mb-5">
                    <select class="form-select changeLang bg-white w-75 float-right">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                        <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>Japan</option>
                        <option value="ko" {{ session()->get('locale') == 'ko' ? 'selected' : '' }}>Korean</option>
                        <option value="th" {{ session()->get('locale') == 'th' ? 'selected' : '' }}>Thailand</option>
                        <option value="zh-CN" {{ session()->get('locale') == 'zh-CN' ? 'selected' : '' }}>China</option>
                        <option value="my" {{ session()->get('locale') == 'my' ? 'selected' : '' }}>Myanmar</option>


                    </select>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-around align-items-center">
                <img  class="h-25 w-25 rounded"  src="{{ asset('img/tt.jpg')}}">
                <div class="">
            <h3>{{ GoogleTranslate::trans('သူရိန်လင်းဆော့ဝဲလ်အက်ပလီကေးရှင်းမှ ကြိုဆိုပါသည် 👨‍💻', app()->getLocale()) }}</h3>
            <h3>{{ GoogleTranslate::trans('Hello World 🌎', app()->getLocale()) }}</h3>
            <p  class="font-weight-bold mt-4">{{ GoogleTranslate::trans('My Family  who are my Love ❤️',app()->getLocale()) }}</p>
                </div>
            </div>

        </div>

        <p class="text-center p-5">Thanks for watching my site ❤😘</p>
    </div>
</div>
</body>

<script type="text/javascript">
    let url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
</html>
