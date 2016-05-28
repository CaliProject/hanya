<!-- Footer -->
<footer class="Footer">
    <div class="culture">
        <img src="{{ url('assets/culture.png') }}" alt="香道文化">
    </div>
    <div class="copyright">
        <p>&copy; {{ date('Y') }} 汉雅. All rights reserved.</p>
    </div>
    <div class="brand">
        <p>&gt; 汉雅 &lt;</p>
    </div>
    <div class="icp">
        <span>粤ICP备233333号</span>
    </div>
</footer>
<!-- Side utilities -->
{{--<aside class="Utilities">--}}
    {{--<div class="unit back-top" :class="{ 'hide' : !displayBackTop}" @click="backToTop">--}}
    {{--<i class="fa fa-angle-up"></i>--}}
    {{--</div>--}}
{{--</aside>--}}
@stack('footer')