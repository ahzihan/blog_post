
<div class="card mb-3 w-100">
  {{-- <img src="{{ asset('uploads/'.$list->photo) }}" class="card-img-top" alt="Image"> --}}
  <div class="card-body">
    <h5 class="card-title">{{ $list->title }}</h5>
    <p>Posted at : <small>{{ $list->created_at }}</small></p>
    <p class="card-text">{{ $list->details }}</p>
  </div>
  <form id="comentForm" action="" method="post">
    <div class="row">
        <div class="col-sm-6">
            <input id="comment" type="text" class="form-control" placeholder="Comments">
            <input id="post_id" type="hidden" value="{{ $list->id }}">
        </div>
        <div class="col-sm-6">
            <input class="btn btn-sm btn-primary" type="button" value="submit">
        </div>
    </div>
  </form>
  <div id="comment-view"></div>
</div>
<script>
    let comentForm=document.getElementById('comentForm');
    comentForm.addEventListener('submit', async (event)=>{
        event.preventDefault();
        let comment=document.getElementById('comment').value;
        let post_id=document.getElementById('post_id').value;

            let formData={
                post_id:post_id,
                coment:comment,
            }
            let URL="/comment";
            let result=await axios.post(URL,formData);
            if(result.status===200 && result.data===1){
                console.log('success');
                comentForm.reset();
            }else {
                console.log('Something went wrong');
            }
        })

    GetCommentList();
    async function GetCommentList(){
        let post_id=document.getElementById('post_id').value;
        let URL="/comment/"+post_id;

        try {
            const res = await axios.get(URL);
            res.data.forEach((item)=>{
                document.getElementById("comment-view").innerHTML+=(`
                <p>${item['coment']}</p>
                `);
            })
        } catch (error){
            console.log(error);
        }
    }
</script>

