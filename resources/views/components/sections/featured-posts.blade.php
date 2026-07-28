<div class="flex flex-wrap justify-between bg-base-200">
    @for ($i = 0; $i < 3; $i++)
        <div class="card bg-base-100 w-80 shadow-sm mt-4">
            <figure>
                <img
                    src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                    alt="Shoes" />
            </figure>

            <div class="card-body">
                <h2 class="card-title">Blog Title</h2>
                <p>
                    A card component has a figure, a body part, and inside body there are title and actions parts
                </p>

                <div class="card-actions justify-center">
                    <button class="btn btn-primary">Read More</button>
                </div>
            </div>
        </div>
    @endfor
</div>