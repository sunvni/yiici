pipeline {
     agent {
        node {
            label 'EB_TEST_SEL'
            customWorkspace '/home/yiici'
        }
    }
    options { timestamps () }
    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
