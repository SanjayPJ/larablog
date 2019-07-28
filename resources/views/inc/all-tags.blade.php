            <!-- End Post Details -->
                <!-- Sidebar-->

            <div class="col-lg-12 mt-5">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">

                            @foreach ($blogtags as $tag)
                                <a href="{{ route('tags.single', ['id' => $tag->id]) }}" class="w-tags-item">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </aside>
            </div>

            <!-- End Sidebar-->