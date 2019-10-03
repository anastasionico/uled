<!DOCTYPE html>
<html>
<head>
    <title>Uniled Holding Text</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>

<body>
    <main id="rootSecond">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>

        <section class="contentSecond">
            <div>
                <header class="contentSecond-header">
                    <h1>Send to a friend</h1>
                    <h6>Share this great deal with friends!</h6>
                </header>

                <form method="POST" action="share/store">
                    {{ csrf_field() }}
                    <div class="control">
                        <div class="rgt">
                            <b>Your name *</b>
                        </div>
                        <div>
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="control">
                        <div class="rgt">
                            <b>Friend's name *</b>
                        </div>
                        <div>
                            <input type="text" name="friend">
                        </div>
                    </div>

                    <div class="control">
                        <div class="rgt">
                            <b>Friend's email *</b>
                        </div>
                        <div>
                            <input type="email" name="email">
                        </div>
                    </div>

                    <div class="control">
                        <div></div>
                        <div>
                            <button type="submit">
                                <span>
                                    &#x27A1;
                                </span>
                                SUBMIT
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
        </section>
    </main>
</body>
</html>