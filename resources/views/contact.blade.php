@extends("layout")

@section("contentPage")

    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"name="email" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Subject</label>
            <input type="text"name ="subject" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Message</label>
            <input type="text"name ="message" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46446.53707263431!2d21.85216749618781!3d43.31617342571522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4755b0c240c81f65%3A0x56319fe3122ac3cd!2z0J3QuNGI!5e0!3m2!1ssr!2srs!4v1793909406258!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

@endsection
