<x-home-table>

    @section('title')
	    <title>Gallery | Datatable</title>
    @endsection
    @section('css-styles')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=" {{ asset('css/gallery.css') }}">
    @endsection

    @section('content')

        <h2 style="padding: 40px; font-size : 40px;">Gallery : </h2>

        <hr>

        @can('view', Auth::user())
        <button id="addImg">Add a image</button>
        @endcan

        <div id="gallery">
        @foreach($images as $image)
            <div class="img">
                <img src = "{{ asset('images/' . $image['imageName']) }}">
                <hr><br>
                <p>Created by<b>{{ $image['user']}}</b></p>
                <p><i>{{ $image['createdAt'] }}</i></p>
                <br>
                <hr>
                <br>
                @can('view', Auth::user())
                    <a href="{{ route('gallery.delete', $image['id']) }}"><button>Delete</button></a>
                @endcan 
            </div>
        @endforeach
          
        </div>


        <div class="bg-modal">
		<div class="modal-content">
			<div class="close">+</div>
			<form action="/storeImage" method="post" enctype="multipart/form-data">
                {{ @csrf_field() }}
				<label class="form-label" for="file">Choose a new image to save...</label>
				<input name="file" type="file" class="form-control" id="customFile" />
				<br>
				<br>	
				<button name="submit" type="submit" class="btn btn-sm btn-primary">Add Image</button>
			</form>
		</div>
	    </div>
    @endsection


    @section('js')

    <script type="text/javascript">
        const button = document.querySelector('#addImg');
        const modal = document.querySelector('.bg-modal');

        button.addEventListener('click', (e)=>{
            modal.style.display = 'flex';
        });


        const close = document.querySelector('.close');

        close.addEventListener('click', (e)=>{
            modal.style.display = 'none';
        });
    </script>
    


    @endsection

</x-home-table>