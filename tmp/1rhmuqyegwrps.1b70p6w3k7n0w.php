<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
    <section class="hero">
        <div class="container">
            <h1>Tìm Việc Làm Mơ Ước Của Bạn</h1>
            <p>Khám phá hàng ngàn cơ hội việc làm từ các công ty hàng đầu</p>
        </div>
    </section>

    <section class="container">
        <div class="search-section">
            <form class="search-form">
                <div class="form-group">
                    <label for="level">Kinh nghiệm</label>
                    <select id="level">
                        <option value="">Chọn cấp độ</option>
                        <option value="intern">Thực tập sinh (Intern)</option>
                        <option value="junior">Junior</option>
                    <option value="mid">Middle</option>
                    <option value="senior">Senior</option>
                    <option value="lead">Team Lead</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="location">Địa điểm</label>
                    <select id="location">
                        <option value="">Chọn địa điểm</option>
                        <option value="hanoi">Hà Nội</option>
                        <option value="hcm">TP. Hồ Chí Minh</option>
                        <option value="danang">Đà Nẵng</option>
                        <option value="other">Khác</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Ngành nghề</label>
                    <select id="category">
                        <option value="">Chọn ngành nghề</option>
                        <option value="it">Công nghệ thông tin</option>
                        <option value="marketing">Marketing</option>
                        <option value="sales">Kinh doanh</option>
                        <option value="finance">Tài chính</option>
                    </select>
                </div>
                <button type="submit" class="search-btn">Tìm Kiếm</button>
            </form>
            <div id="search-results" class="main-content" style="display: none; margin-top: 2rem;">
                <h3 class="section-title">Kết quả tìm kiếm</h3>
                <ul id="result-list"></ul>
            </div>
        </div>

        <div class="main-content">
            <h2 class="section-title">Ngành Nghề Nổi Bật</h2>
            <div class="categories">
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="category-title">Công Nghệ Thông Tin</div>
                    <div class="category-count">2,345 việc làm</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="category-title">Marketing</div>
                    <div class="category-count">1,234 việc làm</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-briefcase"></i></div>
                    <div class="category-title">Kinh Doanh</div>
                    <div class="category-count">987 việc làm</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-coins"></i></div>
                    <div class="category-title">Tài Chính</div>
                    <div class="category-count">756 việc làm</div>
                </div>
            </div>

            <h2 class="section-title">Công Ty Tiêu Biểu</h2>
            <div class="categories">
                <div class="category-card">
                    <img src="/assets/img/google.png" alt="Google" style="width: 50px; margin-bottom: 1rem;">
                    <div class="category-title">Google</div>
                    <div class="category-count">120+ tin tuyển</div>
                </div>
                <div class="category-card">
                    <img src="/assets/img/microsoft.png" alt="Microsoft" style="width: 50px; margin-bottom: 1rem;">
                    <div class="category-title">Microsoft</div>
                    <div class="category-count">98+ tin tuyển</div>
                </div>
                <div class="category-card">
                    <img src="/assets/img/vng.png" alt="VNG" style="width: 50px; margin-bottom: 1rem;">
                    <div class="category-title">VNG</div>
                    <div class="category-count">65+ tin tuyển</div>
                </div>
                <div class="category-card">
                    <img src="/assets/img/viettel.png" alt="Viettel" style="width: 50px; margin-bottom: 1rem;">
                    <div class="category-title">Viettel</div>
                    <div class="category-count">110+ tin tuyển</div>
                </div>
            </div>

                <h2 class="section-title">Việc Làm Mới Nhất</h2>
                <div class="job-grid">
                    <div class="job-card">
                        <div class="job-header">
                            <div>
                                <h3 class="job-title">Frontend Developer</h3>
                                <p class="company-name">Tech Solutions Vietnam</p>
                            </div>
                            <div class="salary">15-25 triệu</div>
                        </div>
                        <div class="job-info">
                            <span class="job-tag">📍 Hà Nội</span>
                            <span class="job-tag">⏰ Full-time</span>
                            <span class="job-tag">🎓 2+ năm kinh nghiệm</span>
                        </div>
                        <p class="job-description">
                            Tìm kiếm Frontend Developer có kinh nghiệm với React, Vue.js. Làm việc trong môi trường startup năng động với nhiều cơ hội thăng tiến.
                        </p>
                        <div class="job-actions">
                            <button class="btn-apply">Ứng Tuyển</button>
                            <button class="btn-save">Lưu Tin</button>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="job-header">
                            <div>
                                <h3 class="job-title">Digital Marketing Manager</h3>
                                <p class="company-name">Creative Agency</p>
                            </div>
                            <div class="salary">20-30 triệu</div>
                        </div>
                        <div class="job-info">
                            <span class="job-tag">📍 TP.HCM</span>
                            <span class="job-tag">⏰ Full-time</span>
                            <span class="job-tag">🎓 3+ năm kinh nghiệm</span>
                        </div>
                        <p class="job-description">
                            Quản lý chiến lược marketing digital, SEO/SEM, social media marketing. Cơ hội làm việc với các thương hiệu lớn.
                        </p>
                        <div class="job-actions">
                            <button class="btn-apply">Ứng Tuyển</button>
                            <button class="btn-save">Lưu Tin</button>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="job-header">
                            <div>
                                <h3 class="job-title">Business Analyst</h3>
                                <p class="company-name">Financial Corp</p>
                            </div>
                            <div class="salary">18-28 triệu</div>
                        </div>
                        <div class="job-info">
                            <span class="job-tag">📍 Đà Nẵng</span>
                            <span class="job-tag">⏰ Full-time</span>
                            <span class="job-tag">🎓 2+ năm kinh nghiệm</span>
                        </div>
                        <p class="job-description">
                            Phân tích dữ liệu kinh doanh, tối ưu hóa quy trình. Môi trường làm việc chuyên nghiệp với package benefits hấp dẫn.
                        </p>
                        <div class="job-actions">
                            <button class="btn-apply">Ứng Tuyển</button>
                            <button class="btn-save">Lưu Tin</button>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="job-header">
                            <div>
                                <h3 class="job-title">UX/UI Designer</h3>
                                <p class="company-name">Design Studio</p>
                            </div>
                            <div class="salary">16-24 triệu</div>
                        </div>
                        <div class="job-info">
                            <span class="job-tag">📍 Hà Nội</span>
                            <span class="job-tag">⏰ Full-time</span>
                            <span class="job-tag">🎓 1+ năm kinh nghiệm</span>
                        </div>
                        <p class="job-description">
                            Thiết kế giao diện người dùng cho web và mobile app. Làm việc với team sáng tạo, cơ hội học hỏi và phát triển không giới hạn.
                        </p>
                        <div class="job-actions">
                            <button class="btn-apply">Ứng Tuyển</button>
                            <button class="btn-save">Lưu Tin</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>
