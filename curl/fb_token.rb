require 'mechanize'
require 'pry'

L = 'https://www.facebook.com/v2.6/dialog/oauth?redirect_uri=fb464891386855067%3A%2F%2Fau' \
    'thorize%2F&scope=user_birthday,user_photos,user_education_history,email,user_relatio' \
        'nship_details,user_friends,user_work_history,user_likes&response_type=token%2Csigned' \
            '_request&client_id=464891386855067'.freeze

USER_AGENT = 'Mozilla/5.0 (Linux; U; en-gb; KFTHWI Build/JDQ39) AppleWebKit/535.19 (KHTML' \
', like Gecko) Silk/3.16 Safari/535.19'.freeze

def wrong_args
puts 'usage: ruby tinder_fb_token.rb email password'
end

wrong_args if ARGV.count != 2

mechanize = Mechanize.new
mechanize.user_agent = USER_AGENT

login_form = mechanize.get(L).form do |f|
f.email = ARGV[0]
f.pass = ARGV[1]
end

result = login_form.submit.form.submit.body.split('access_token=')[1].split('&')[0]

puts "Facebook Access Token: #{result}"
