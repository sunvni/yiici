pipeline {
    agent { label: 'yiici'}
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                sh "docker-compose build"
                sh "docker-compose up -d"
            }
        }
        stage('Test') {
            steps {
                sh "docker-compose exec composer run-script test"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
