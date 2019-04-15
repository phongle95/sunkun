<div class="sidebar_search">
        <form action="{{ route('trangchu.timkiem.news') }}" method="get">
            <input id="sidebar_search_input" type="search" name="tukhoa" class="sidebar_search_input" placeholder="" required="required">
            <button id="sidebar_search_button" type="submit" class="sidebar_search_button trans_300" value="Submit">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                            s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                            C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                            M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                            c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                            c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                            C-2.019,484.77-2.019,497.865,6.057,505.942z" />
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </form>
    </div>

    <!-- Sidebar Latest Posts -->
    <div class="sidebar_latest_posts">
        {{--
        <div class="sidebar_title">Tin nổi bật</div> --}}
        <h3><span class="badge badge-primary">Tin nổi bật</span></h3>
        <div class="latest_posts_container">
            <ul>
                @foreach ($tintuc as $item)
                <!-- Latest Post -->
                <li class="latest_post clearfix">
                    <div class="latest_post_image">
                        <a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}"><img class="smal-img" src="/upload/{{ $item->img }}" alt=""></a>
                    </div>
                    <div class="latest_post_content">
                        <div class="latest_post_title trans_200"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">{{ $item->tieuDe }}</a></div>
                        <div class="latest_post_meta">
                            <div class="latest_post_date trans_200"><a href="{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id]) }}">{{ date("d-m-Y", strtotime($item->date)) }}</a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar_latest_posts">
        {{--
        <div class="sidebar_title">Tin nổi bật</div> --}}
        <h3><span class="badge badge-primary">Tour du lịch nổi bật</span></h3>
        <div class="latest_posts_container">
            <ul>
                    @foreach ($dulich as $item)
                    <!-- Latest Post -->
                    <li class="latest_post clearfix">
                       <div class="latest_post_image">
                          <a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}"><img class="smal-img" src="/upload/{{ $item->img }}" alt=""></a>
                       </div>
                       <div class="latest_post_content">
                          <div class="latest_post_title trans_200"><a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}">{{ $item->tenTour }}</a></div>
                          <div class="latest_post_meta">
                             <div class="latest_post_date trans_200"><a href="{{ route('trangchu.chitiet.travel',['slug'=>str_slug($item->tenTour),'id'=>$item->id]) }}">ngày {{ date("d-m-Y", strtotime($item->date)) }}</a></div>
                          </div>
                       </div>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
    <div class="sidebar_latest_posts">
        {{--
        <div class="sidebar_title">Tin nổi bật</div> --}}
        <h3><span class="badge badge-primary">Dịch vụ nổi bật</span></h3>
        <div class="latest_posts_container">
            <ul>
                    @foreach ($xe as $item)
                    <!-- Latest Post -->
                    <li class="latest_post clearfix">
                       <div class="latest_post_image">
                          <a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}"><img class="smal-img" src="/upload/{{ $item->img }}" alt=""></a>
                       </div>
                       <div class="latest_post_content">
                          <div class="latest_post_title trans_200"><a href="{{ route('trangchu.chitiet.car',['slug'=>str_slug($item->todo),'id'=>$item->id]) }}">{{ $item->todo }}</a></div>
                       </div>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>

    <div class="sidebar_latest_posts">
        {{--
        <div class="sidebar_title">Tin nổi bật</div> --}}
        <h3><span class="badge badge-primary">Khách sạn nổi bật</span></h3>
        <div class="latest_posts_container">
            <ul>
                    @foreach ($nhanghi as $item)
                    <!-- Latest Post -->
                    <li class="latest_post clearfix">
                       <div class="latest_post_image">
                          <a href="{{ route('trangchu.chitiet.hotel',['slug'=>str_slug($item->tenHotel),'id'=>$item->id]) }}"><img class="smal-img" src="/upload/{{ $item->img }}" alt=""></a>
                       </div>
                       <div class="latest_post_content">
                          <div class="latest_post_title trans_200"><a href="{{ route('trangchu.chitiet.hotel',['slug'=>str_slug($item->tenHotel),'id'=>$item->id]) }}">{{ $item->tenHotel }}</a></div>
                          <div class="latest_post_meta">
                             <div class="trending_price">From {{ number_format($item->gia) }}.vnđ</div>
                          </div>
                       </div>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
    <!-- Sidebar Archives -->
    <div class="sidebar_categories">
            <h3><span class="badge badge-primary">Chủ đề</span></h3>
        <div class="sidebar_list">
            <ul>
                @foreach ($loaitin as $item)
                <li><a style="font-weight: 600;color:#262d38" href="{{ route('trangchu.pages.loaitin',['slug'=>str_slug($item->tenLoaiTin),'id'=>$item->maLoaiTin]) }}">{{ $item->tenLoaiTin }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Sidebar Gallery -->
    <div class="sidebar_gallery">
            <h3><span class="badge badge-primary">Instagram</span></h3>
        <div class="gallery_container">
            <ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1473625247510-8ceb1760943f?ixlib=rb-0.3.5&s=c0996cd16eda8c6f54c398de02d03cd3&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_1.jpg" alt="https://unsplash.com/@mantashesthaven">
                    </a>
                </li>
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1495162048225-6b3b37b8a69e?ixlib=rb-0.3.5&s=861dd3c7b9d3e735d7fd7cbb1eefed64&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_2.jpg" alt="https://unsplash.com/@kensuarez">
                    </a>
                </li>
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1502646275263-04be86afa386?ixlib=rb-0.3.5&s=682a41d7d9bf6e3feabc73a5fdd61dd2&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_3.jpg" alt="https://unsplash.com/@jakobowens1">
                    </a>
                </li>
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1484820301304-0b43512779dc?ixlib=rb-0.3.5&s=7a3393e9f507fb4718c36337a8014c52&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_4.jpg" alt="https://unsplash.com/@seefromthesky">
                    </a>
                </li>
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1490380169520-0a4b88d52565?ixlib=rb-0.3.5&s=7e6b68b1911fb4ffeea4c0750b8a5269&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_5.jpg" alt="https://unsplash.com/@deannaritchie">
                    </a>
                </li>
                <li class="gallery_item">
                    <a class="colorbox" href="https://images.unsplash.com/photo-1504434026032-a7e440a30b68?ixlib=rb-0.3.5&s=2cc35bf903b78ba4f7f7ed69bc2abe3f&auto=format&fit=crop&w=720&q=80">
                        <img src="travel/images/gallery_6.jpg" alt="https://unsplash.com/@benobro">
                    </a>
                </li>
            </ul>
        </div>
    </div>
