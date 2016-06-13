<!-- Footer -->
<footer class="Footer">
    <div class="culture">
        <img src="{{ url('assets/culture.png') }}" alt="香道文化">
    </div>
    <div class="contact">
        <div class="details">
            <span class="tel"><i class="fa fa-phone"></i>&nbsp;@conf('home.footer_about.telephone')</span>
            <span class="address"><i class="fa fa-building"></i>&nbsp;@conf('home.footer_about.address')</span>
        </div>
        <div class="social">
            <div class="qq">
                <i class="fa fa-qq"></i>&nbsp;@conf('home.footer_about.qq')
            </div>
            <div class="wechat">
                <i class="fa fa-wechat"></i>&nbsp;@conf('home.footer_about.wechat')
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; {{ date('Y') }} 汉雅. All rights reserved.</p>
    </div>
    <div class="friend-links">
        <ul>
            @foreach(Conf::link()->captions as $id => $link)
                @if($id)
                    <li>
                        <a href="{{ $link->link }}" target="_blank">{{ $link->name }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="icp">
        {{-- TODO: 读取备案号Conf --}}
        <span>粤ICP备233333号</span>
    </div>
</footer>
<!-- Side utilities -->
<aside class="Utilities">
    <div class="unit back-top hide">
        <i class="fa fa-angle-up"></i>
    </div>
    <div class="unit unit--slide weibo" slide-text="关注微博" clickable="@conf('social.weibo')">
        <i class="fa fa-weibo"></i>
    </div>
    <div class="unit unit--slide unit--fancy wechat" slide-text="关注微信" clickable="http://weixin.sogou.com/weixin?type=1&query=@conf('social.wechat.name')">
        <i class="fa fa-wechat"></i>
        <div class="unit__aux">
            <img src="@conf('social.wechat.image')" class="qr-code" alt="微信公众号二维码">
        </div>
    </div>
    <div class="unit unit--slide qq" slide-text="联系QQ" clickable="http://wpa.qq.com/msgrd?V=1&Uin=@conf('social.qq')&Site={{ url()->current() }}&Menu=yes">
        <i class="fa fa-qq"></i>
    </div>
</aside>
@stack('footer')