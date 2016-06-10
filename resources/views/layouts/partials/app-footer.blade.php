<!-- Footer -->
<footer class="Footer">
    <div class="culture">
        <img src="{{ url('assets/culture.png') }}" alt="香道文化">
    </div>
    <div class="copyright">
        <p>&copy; {{ date('Y') }} 汉雅. All rights reserved.</p>
    </div>
    <div class="friend-links">
        {{-- TODO: 友情链接Conf --}}
        <ul>
            @for($i = 0; $i < 20; $i++)
                <li>
                    <a href="#" target="_blank">友链 {{ $i + 1 }}</a>
                </li>
            @endfor
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
    {{-- TODO: 读取微博Conf, 替换链接 --}}
    <div class="unit unit--slide weibo" slide-text="关注微博" clickable="http://weibo.com">
        <i class="fa fa-weibo"></i>
    </div>
    {{-- TODO: 读取微信Conf, 更改AbletonLive为微信公众号名字 & img的src --}}
    <div class="unit unit--slide unit--fancy wechat" slide-text="关注微信" clickable="http://weixin.sogou.com/weixin?type=1&query=AbletonLive">
        <i class="fa fa-wechat"></i>
        <div class="unit__aux">
            <img src="https://dn-abletive.qbox.me/v/images/4.0qrcode.jpeg" class="qr-code" alt="微信公众号二维码">
        </div>
    </div>
    {{-- TODO: 读取QQ Conf, 更换12345为QQ号 --}}
    <div class="unit unit--slide qq" slide-text="联系QQ" clickable="http://wpa.qq.com/msgrd?V=1&Uin=12345&Site={{ url()->current() }}&Menu=yes">
        <i class="fa fa-qq"></i>
    </div>
</aside>
@stack('footer')